<?php

include( '../core/init.inc.php' );

if( $_POST )
{
	$return = addAccount( $_POST[ 'email' ], $_POST[ 'password' ], $_POST[ 'zipcode' ] );

	echo json_encode( $return );
}

?>
