
<?php 

	header('content-type:text/html;charset=utf-8');  
	
	# if & switch
	
	#关系运算符
	// > < == != >= <= === !===
	// $num = 2;

	

	# 单个if
	// if ($num <= 4) echo "num的值一定是小于或者等于4";

	

	# if else
	/*
		if ($num >= 4) {
			echo "true";
		} else {
			echo "false";
		}
	*/

	

	#nesting if
	/*
		$num = 4;
		if ($num >= 4) {
			if ($num <= 10) {
				echo "num的值一定是4~10之间";
			}else{
				echo "num大于10";
			}
		}else{
			echo "num的值一定是小于4";
		}
	*/
	
	

	#逻辑运算符
	/*
		逻辑非 ！
		逻辑与 && AND
		逻辑或 || OR
		逻辑异或 XOR

	*/
	/*
		$num = 3;
		if ($num < 2 XOR $num > 10) {
			echo "num大于3 并且小于10";
		}
	*/

	/*
		AND: 一假即假
		OR : 一真即真
		XOR: 一真为真,两真为假
	*/

	#switch
	$favColor = 1;
	switch ($favColor) {
		case "1":
			echo "angry";
			break;
		case 'yellow':
			echo "happy";
			break;
		case 'blue':
			echo "silence";
			break;
		case 'green':
			echo "forgive";
			break;
		default:
			echo "GUN";
			break;
	}


 ?>