<?php 
	
	require_once ('../inc/config.php');
	session_start();
	session_destroy();
	header('Location:'.BASEURL.'/page/login.php');

 ?>