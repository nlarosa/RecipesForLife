<?php

include 'simple.lex.php';
error_reporting(E_ALL);

$tempFileName = tempnam( '/tmp', 'ingred' );

$fileHandle = fopen( $tempFileName, "w" );

fwrite( $fileHandle, "2 10 oz can Old El Paso enchilada sauce\n" );
fclose( $fileHandle );

$scanner = new Yylex( fopen( $tempFileName, 'r' ) );

$return = array();
$ingredientArray = array();

$amount = 1;
$unit = '';
$ingredient = '';
$descriptor = '';
$otherAmounts = array();
$fractionAmounts = array();
$addAmounts = array();
$fraction = 0;
$amount = 1;
$otherAmountCount = 0;

while( $t = $scanner->nextToken() )
{
	print_r( $t );

	$t = get_object_vars( $t );

	$type = $t[ 'type' ];
	$value = $t[ 'value' ];

	if( is_numeric( $type ) )		// add to amount
	{
		if( $fraction == 1 )
		{
			$fractionAmounts[] = array_pop( $otherAmounts );
			$fractionAmounts[] = $type;
			$otherAmountCount--;
		}
		else
		{
			$otherAmounts[] = $type;
			$otherAmountCount++;
		}
	}
	else if( $type == 'Unit' )
	{
		$unit = $unit . ' ' . $value;
	}
	else if( $type == 'Ingredient' )
	{
		$ingredient = $ingredient . ' ' . $value;
	}
	else if( $type == 'Descriptor' )
	{
		$descriptor = $descriptor . ' ' .$value;
	}
	else if( $type == 'Add' )
	{
		$addAmounts[] = array_pop( $otherAmounts );
		$otherAmountCount--;
	}
	else if( $type == 'Fraction' )
	{
		$fraction = 1;
	}	
	else if( $t[ 'type' ] == 'Done' )
	{
		//$otherAmounts[] = $amount;
		$addAmount = 0;
		$fractionAmount = 0;
		$amount = 1;

		//print_r( 'Add amounts: ' );
		//print_r( $addAmounts );

		foreach( $addAmounts as $nextAdd )
		{
			$addAmount = $addAmount + $nextAdd;
		}

		//print_r( 'Fraction amounts: ' );
		//print_r( $fractionAmounts );

		if( count( $fractionAmounts ) == 2 )
		{
			$fractionAmount = $fractionAmounts[0] / $fractionAmounts[1];
			
		}

		foreach( $otherAmounts as $nextAmount )
		{
			$amount = $amount * $nextAmount;
		}

		//print_r( 'Other amounts: ' );
		//print_r( $otherAmounts );

		if( $otherAmountCount <= 0 )
		{
			$amount = 0;
		}

		$ingredientArray[ 'Amount' ] = $amount + $addAmount + $fractionAmount;
		$ingredientArray[ 'Unit' ] = trim( $unit );
		$ingredientArray[ 'Ingredient' ] = trim( $ingredient );
		$ingredientArray[ 'Descriptor' ] = trim( $descriptor );

		$return[] = $ingredientArray;

		$ingredientArray = array();
		$unit = '';
		$ingredient = '';
		$descriptor = '';
		$addAmounts = array();
		$fractionAmounts = array();
		$otherAmounts = array();
		$fraction = 0;
	}
}

print_r( json_encode( $return ) );
unlink( $tempFileName );

