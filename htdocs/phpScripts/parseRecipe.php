<?php

//include '../core/init.inc.php';
include 'ingredient.lex.php';
include 'initialIngredientParsing.php';
include 'php_oci_funcs.php';

$jsonString = file_get_contents('php://input');

$data = json_decode( $jsonString, true );
$data[ 'ingredients' ] = trim( $data[ 'ingredients' ] );

$ingredients = explode( "\n", $data[ 'ingredients' ] );
$ingredients = array_filter( $ingredients );
#print_r( $ingredients );

$return = array();
$return[ 'ingredients' ] = array();

$conn = connect();

foreach( $ingredients as $ingredient )
{
	$ingredient = trim( $ingredient );
	$unparsedIngredient = $ingredient;
	$ingredient = parseIngredientBefore( $ingredient );
	$ingredient = str_replace( "\n", '', $ingredient );

	#print_r( $ingredient );

	$tempFileName = tempnam( '/tmp', 'ingred' );

	$fileHandle = fopen( $tempFileName, "w" );

	fwrite( $fileHandle, $ingredient . "\n" );
	fclose( $fileHandle );

	$scanner = new Yylex( fopen( $tempFileName, 'r' ) );

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
	$amountFound = 0;

	while( 1 )
	{
		$ingredientArray[ 'Result' ] = 'Error';
		$ingredientArray[ 'originalString' ] = $unparsedIngredient;

		try
		{
			$t = $scanner->nextToken();
		}
		catch( Exception $e )
		{
			#print_r( $e );
			break;
		}

		if( $t != NULL )
		{
			$t = get_object_vars( $t );
		}
		else
		{
			continue;
		}

		#print_r( $t );

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

			$amountFound = 1;
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

			if( $amountFound == 0 )
			{
				$amount = 1;
			}
			else if( $otherAmountCount <= 0 )
			{
				$amount = 0;
			}

			$unit = trim( $unit );
			$unit = rtrim( $unit, 's' );	

			$ingredientArray[ 'Amount' ] = $amount + $addAmount + $fractionAmount;
			$ingredientArray[ 'Unit' ] = $unit;
			$ingredientArray[ 'Ingredient' ] = trim( $ingredient );
			$ingredientArray[ 'Descriptor' ] = trim( $descriptor );


			#$searchResults = searchIngredient( $conn, $ingredientArray[ 'Ingredient' ], 10 );
			$searchResults = searchIngredientsUsingIndex( $conn, $ingredientArray[ 'Ingredient' ], $ingredientArray[ 'Descriptor' ], 10 );
		
			#print_r( $searchResults );

			$ingredientArray[ 'Result' ] = 'Success';	
			$ingredientArray[ 'ingredientResults' ] = $searchResults;
			break;

			#print_r( getIngredientProximates( $conn, $searchResults[ 0 ][ 'ID' ], 100 ) );

	#		$ingredientArray = array();
	#		$unit = '';
	#		$ingredient = '';
	#		$descriptor = '';
	#		$addAmounts = array();
	#		$fractionAmounts = array();
	#		$otherAmounts = array();
	#		$fraction = 0;
		}
	}

	$return[ 'ingredients' ][] = $ingredientArray;
	unlink( $tempFileName );
}

echo json_encode( $return );

