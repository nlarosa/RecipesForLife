<?php

include 'php_oci_funcs.php';

$jsonString = file_get_contents('php://input');

$data = json_decode( $jsonString, true );

$conn = connect();

if( $data[ 'prepTime' ] == '""' )
{
	$data[ 'prepTime' ] = "0";
}

addRecipe( $conn, 'test@nd.edu', $data[ 'title' ], $data[ 'instructions' ], $data[ 'servings' ], $data[ 'prepTime' ], 0 ); 

$return[ 'Result' ] = 'Success';

echo json_encode( $return );

