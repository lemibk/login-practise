<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "hello world"."<br>";
	$x=2;
	echo "the value of x=".$x."<br>";
	
	
	function sum($num1,$num2){
	return $num1+$num2;

	}
	echo "sum=".sum(2,3)."<br>";

	$arr=array("hi    ","byes");
	foreach($arr as $xz)
	echo "$xz";


 
	?>
</body>
</html>