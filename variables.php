<?php 
	// echo "Hello World!";
	// 单行注释 快捷键：command + /
	// 单行注释 快捷键：shift + 3
	
	/*
	多行注释 
	快捷键：alt + command + /
	*/

	#variable 变量
	
	$output = "Hello World!";
	/*
		- 前缀 $
		- 以字母、数字、下划线组成
		- 数字不能开头
		- 大小写敏感
		- 驼峰命名法
	*/
	

	# 数据类型
	/*
		String Integer Float Boolean Array Object Resource(函数)
	*/

	$output = 22;
	$float = 22.22;
	$bool = true; //1为真  0为false,网页中不显示
	
	#运算符
	$num1 = 10;
	$num2 = 20;
	$sum = $num1 + $num2;

	#字符串拼接
	$string1 = "Hello";
	$string2 = "World";
	// 在php中 +号就是+号,没有拼接功能
	// .为拼接符
	#$greeting = $string1 + $string2;
	$greeting = $string1." ".$string2."!";

	#php中引号的区别
	#单引中的内容是单纯的字符串
	$greeting2 = '$string1 $string2';
	#双引中的变量可以正常被解析
	$greeting3 = "$string1 $string2";

	#转义字符
	$string3 = 'They\'re here';
	$string4 = "They're here";

	echo $string4."<br>";
	printf($string4);

	echo "<hr>";

	#常量:大写
	define("GREETING", "WhatEver!");
	#常量的第三个参数为bool,true为不分大小写
	define("GREETING", "What Ever!",true);

	echo greeting,GREETING;
	echo "<hr>";
	var_dump(greeting);//打印结果为内容+字符串长度

 ?>
