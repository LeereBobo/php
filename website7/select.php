<?php 

	header('content-type:text/html;charset=utf-8');

	function selectData($sql){
		# 链接数据库
		$mysqli = new mysqli("localhost","root","","people");
	
		# 测试是否链接成功
		if ($mysqli->connect_errno) {
			# 0为链接成功
			die($mysqli->connect_error);
		}
	
		
		# 设置utf8
		$mysqli->query("set names utf8");
	
		# 执行sql语句
		$mysqli->query($sql);
		$result = $mysqli->query($sql);

		//var_dump($result);
		if ($result->num_rows) {
			$data = $result->fetch_all(MYSQLI_ASSOC);//默认是下标数组
			//print_r($data);

			echo json_encode($data);
		}
	
		# 断开链接
		$mysqli->close();
	}


	# 准备sql语句
	$sql = "SELECT * FROM customers";
	selectData($sql);
















 ?>