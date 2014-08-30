<?php

//session_start();

// pages that are accessible if not logged in

$exceptions = array('index');

$page = substr( end( explode( '/', $_SERVER['SCRIPT_NAME'] ) ), 0, -4);	// get current page

if( in_array($page, $exceptions) === false ) 
{
	if( isset($_SESSION['user']) === false ) 			// user not logged in
	{
		//header('Location: index.php');
		//die();
	}
}

$DB = oci_connect( 'system', 'sm_nl_zl_4RFL' );

$path = dirname(__FILE__);						// actual file

include( "{$path}/inc/account.inc.php" );

?>
