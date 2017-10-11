<?php 
	header('content-type:text/html;charset=utf-8');  

	# function: 函数 - 具有某一功能的代码块
	
	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	
	# 定义函数
	function simpleFunction(){
		echo "Hello World!";
	}
	//调用函数：PHP中函数名称大小写不敏感
	// SimpleFunction();
	// SIMPLEFUNCTION();

	# 有参数 无返回值
	//PHP中有形参必有实参，或者在形参中给定默认值
	function buy($money="10块钱"){
		echo $money."给了，但没给我买东西！拿着钱跑了！";
	}
	// buy("30块钱");

	# 多参数 有返回值
	function sumValue($num1,$num2=10){
		$sum = $num1 + $num2;
		return $sum;
	}
	$result = sumValue(5); //$num1 = 5
	//echo $result;

	# 无参数 有返回值
	function buyDrink(){
		return "饭后的甜点!";
	}
	// echo buyDrink();

	# 函数传引用
	//通过取地址符&,进入原始存储数据,改变其值
	$myNum = 10;
	function addFive(&$num){
		$num += 5;
	}
	addFive($myNum);
	echo $myNum;//15 拿到了myNum的引用，改变了内存中的数值，所以是15

 ?>