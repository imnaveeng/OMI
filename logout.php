<?php 
	session_start();
	session_destroy();
	session_unset();
	unset($_SESSION);
	session_write_close();
	header('location:../project2/login.html');
?>