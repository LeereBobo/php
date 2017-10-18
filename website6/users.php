<?php 

	# 链接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	
	# 查询
	$query = "SELECT * FROM users";

	# 执行
	$result = mysqli_query($conn,$query);

	# 返回
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);//数组

	echo json_encode($users);//数组转化为json

	//print_r($users);

	// var_dump($users);





 ?>