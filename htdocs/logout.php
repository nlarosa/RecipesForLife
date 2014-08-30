<?php
	session_start();
	if(isset($_SESSION))session_destroy();
	header('Location: http://csevm04.crc.nd.edu:8404/main.html');
?>
