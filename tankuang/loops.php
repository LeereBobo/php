<?php 
	# loops: 循环 - 让项目制作的更高效
	# 根据某个条件,重复执行某段代码
	
	/*
		-For
		-While 
		-Do...While
		-Foreach
	*/

	
	# For 循环
	// @params - init,condition,inc
	/*
		for ($i=0; $i < 10; $i++) { 
			echo ($i+1)."<br>";
		}
	*/

	
	# While 循环
	// @params - condition
	/*
		$i = 0;
		while ($i < 10) {
			echo $i."<br>";
			$i++;
		}
	*/

	
	# do...while
	// @params - condition
	/*
		$i = 0;
		do{
			echo $i."<br>";
			$i++;
		}while ($i<10);
	*/


	# foreach 循环 下标数组
	/*
		$people = array("Henry","Bucky","Emily");
		foreach ($people as $person) {
			echo $person;
			echo "<br>";
		}
	*/

	
	# foreach 循环 关联数组
	/*
		$people = array(
			"Henry" => "Henry@gmail.com",
			"Bucky" => "Bucky@gmail.com",
			"Emily" => "Emily@gmail.com"
		);
	
		foreach ($people as $person => $email) {
			echo $person.":".$email;
			echo "<br>";
		}
	*/

	/*
		打印1~100之间7的倍数
		打印1~100之间个位为7的数
		打印1~100之间十位为7的数
		打印1~100之间个位不为7，十位不为7，以及不是7的倍数
		打印九九乘法表
	*/

	// 1.打印1~100之间7的倍数
	/*for ($i=1; $i <= 100; $i++) { 
		
		if ($i % 7 == 0) {
			echo $i;
			echo "<br>";
		}
	}*/



	// 2.打印1~100之间个位为7的数
	/*for ($i=1; $i <= 100; $i++) { 
		
		if ($i % 10 == 7) {
			echo $i;
			echo "<br>";
		}
	}*/

	// 3.打印1~100之间十位为7的数
	/*for ($i=1; $i <= 100; $i++) { 
		
		if (($i - $i % 10) / 10== 7) {
			echo $i;
			echo "<br>";
		}
	}*/

	// 4.打印1~100之间个位不为7，十位不为7，以及不是7的倍数
	/*for ($i=1; $i <= 100; $i++) { 
		
		if (($i % 10 != 7) && (($i - $i % 10) / 10 != 7) && ($i % 7 != 0)) {
			echo $i;
			echo "<br>";
		}
	}*/

	// 5.打印九九乘法表
	/*for ($i=1; $i <= 9; $i++) { 
		
		for ($j=1; $j <= $i; $j++) { 
			
			echo $i."X".$j."=".$i * $j;
			echo "<br>";

		}		
	}*/

	echo"<table border='2' width='400'>";  
	for($i=1;$i<=9;$i++)  
	{  
    	echo"<tr>";  
    	for($j=1;$j<=$i;$j++)  
    	{  
      	echo "<td>{$i}*{$j}=".($i*$j)."</td> ";  
    	}  
    	echo"</tr>";  
	}  
	echo"</table>";  

 ?>