<?php 

	$users = ["name" => "Henry","email" => "32@qq.com","age" => 30];

	$users = serialize($users);//将数组转化为字符串，即解析字节流
	setcookie("users",$users,time()+86400);

	$users = unserialize($_COOKIE["users"]);//反解析字节流
	print_r($users);


 ?>