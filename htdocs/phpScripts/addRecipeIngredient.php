<?php

include 'php_oci_funcs.php';

$jsonString = file_get_contents('php://input');

$data = json_decode( $jsonString, true );

$conn = connect();

if( $data[ 'prepTime' ] == '""' )
{
	$data[ 'prepTime' ] = "0";
}

$query = 'select name from ingredient where id = :x';
$stid = oci_parse( $conn, $query );
oci_bind_by_name( $stid, ":x", intval( $data[ 'ingredient' ] ) );
oci_execute( $stid );
$row = oci_fetch_array( $stid, OCI_BOTH );
oci_free_statement( $stid );

if( ( $grams = getIngredientGrams( $conn, $data[ 'ingredient' ], $data[ 'amount' ], $data[ 'unit' ] ) ) != 0 )	// safe to add
{
	addRecipeIngredient( $conn, $data[ 'title' ], $row[ 'NAME' ], $data[ 'amount' ], $data[ 'unit' ] ); 
	$return[ 'Result' ] = 'Success';
}
else
{
	$return[ 'Result' ] = 'Error';
}

echo json_encode( $return );

