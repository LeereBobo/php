<?php 
	
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['success']);
	// session_destroy();

	header("location: login.php");







 ?>