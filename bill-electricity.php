<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<form method="post">
	<input type="text" name="input" placeholder="Enter your consumed units..."><br><br>
	<input type="submit" name="submit">
</form>
<br><br><br>
</body>
</html>


<?php  
if($_POST)
{
	$b=0;
	$a=$_POST['input'];
	if ($a>=0&&$a<=100) {
		echo "Your Bill is: ".($a*7)." Rs. ";
	}
	else if ($a>=100&&$a<300) {
		$b=(100*7.12)+(($a-100)*10.13);
		echo "Your Bill is: ".$b." Rs. ";
	}
	else if ($a>=300&&$a<500) {
		$b=(100*7.12)+(200*10.13)+(($a-300)*16.17);
		echo "Your Bill is: ".$b." Rs. ";
	}
	else if ($a>=500&&$a<800) {
		$b=(100*7.12)+(200*10.13)+(200*16.17)+(($a-300)*25.80);
		echo "Your Bill is: ".$b." Rs. ";
	}
	else if ($a>=800&&$a<1000) {
		$b=(100*7.12)+(200*10.13)+(200*16.17)+(300*25.80)+(($a-300)*29);
		echo "Your Bill is: ".$b." Rs. ";
	}
	else if ($a>=1000) {	
		$b=(100*7.12)+(200*10.13)+(200*16.17)+(300*25.80)+(200*29)+(($a-300)*36.04);
		echo "Your Bill is: ".$b." Rs. ";
	}
	else{
		echo "Your entered wrong.Plz enter a numeric value.......";
	}
}
 ?>