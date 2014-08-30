<?php

include( '../core/init.inc.php' );

#session_destroy();

#echo 'Attempt login.php'
if( $_POST )
{
	#echo 'Attempt login.php'
	$return = verifyCredentials( $_POST[ 'email' ], $_POST[ 'password' ] );

	if( $return == 1 )
	{
		session_start();
		$_SESSION['id'] = $_POST[ 'email' ];
	}

	echo json_encode( $return );
}

?>
