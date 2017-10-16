<?php 
	session_start();

	# 改变SESSION存储的值
	// $_SESSION["name"] = "Bobo";

	# 获取SESSION存储的值
	$name = isset($_SESSION["name"]) ? $_SESSION["name"] : "name属性不存在";
	$name = isset($_SESSION["email"]) ? $_SESSION["email"] : "email属性不存在";
	//print_r($_SESSION);




 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>page 3</title>
 </head>
 <body>
 	<h2><?php echo $name; ?></h2>
 </body>
 </html>