<?php 

	header("content-type:text/html;charset=utf8");

	/*function insertData($sql){
		$mysqli = new mysqli("localhost","root","","people");
		if ($mysqli->connect_errno) {
			die($mysqli->connect_error);
		}
		$mysqli->query("set names utf8");
		$result = $mysqli->query($sql);
		if ($result) {
			echo "插入成功";
		}else{
			echo "插入失败";
		}

		$mysqli->close();
	}
	$sql = "INSERT INTO customers(name,email,address,city,state) VALUES('我的','3@qq.com','定泗路','北京','昌平')";
	insertData($sql);*/

	/*function deleteData($sql){
		$mysqli = new mysqli("localhost","root","","people");
		if ($mysqli->connect_errno) {
			die($mysqli->connect_error);
		}
		$mysqli->query("set names utf8");
		$result = $mysqli->query($sql);
		if ($result) {
			echo "删除成功";
		}else{
			echo "删除失败";
		}
		$mysqli->close();
	}
	$sql = "DELETE FROM customers WHERE id=2";
	deleteData($sql);*/

	/*function updateData($sql){
		$mysqli = new mysqli("localhost","root","","people");
		if ($mysqli->connect_errno) {
			die($mysqli->connect_error);
		}
		$mysqli->query("set names utf8");
		$result = $mysqli->query($sql);
		if ($result) {
			echo "更新成功";
		}else{
			echo "更新失败";
		}
		$mysqli->close();
	}
	$sql = "UPDATE customers SET name='花湖',email='4@qq.com' WHERE id=2";
	updateData($sql);*/

	function selectData($sql){
		$mysqli = new mysqli("localhost","root","","people");
		if ($mysqli->connect_errno) {
			die($mysqli->connect_error);
		}
		$mysqli->query("set names utf8");
		$result = $mysqli->query($sql);
		if ($result->num_rows) {
			$data = $result->fetch_all(MYSQLI_ASSOC);
			echo json_encode($data);

		}
		$mysqli->close();
	}
	$sql = "SELECT * FROM customers";
	selectData($sql);










 ?>