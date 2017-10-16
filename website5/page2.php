<?php 
	header('content-type:text/html;charset=utf-8');

	setcookie("username","Franch",time()+86400);//重新赋值
	setcookie("username","asds",time()-86400);//删除cookie 设置过期时间

	if (count($_COOKIE)>0) {
		echo "一共有".count($_COOKIE)."COOKIE";
	}else{
		echo "没有设置COOKIE！";
	}

	if (isset($_COOKIE['username'])) {
		echo "你的用户名是：".$_COOKIE['username'];
	}else{
		echo "用户名不存在！";
	}

 ?>