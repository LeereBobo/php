<?php 

	session_start();

	unset($_SESSION["name"]);//干掉session中name

	session_destroy();//干掉session中的所有东西






 ?>