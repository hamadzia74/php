<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<input type="text" name="first" placeholder="Enter First Number" />
<br />
<input type="text" name="second" placeholder="Enter Second Number" />
<br />
<select name="choice">
<option value="add">Addition</option>
<option value="sub">subtract</option>
<option value="mul">multiply</option>
<option value="divi">divide</option>
</select>
<br />
<input type="submit"  />
<br />

</form>

</body>
</html>
<?php
if($_POST){
	$first=$_POST['first'];
	$second=$_POST['second'];
	$choice=$_POST['choice'];
	
	switch($choice){
		case "add":
		$result=$first+$second;
		echo "Your addition result is: ".$result;
		break;
		case "sub":
		$result=$first-$second;
		echo "Your subtract result is: ".$result;
		break;
		case "mul":
		$result=$first*$second;
		echo "Your Multiply result is: ".$result;
		break;
		case "divi":
		$result=$first/$second;
		echo "Your divide result is: ".$result;
		break;
		
		default:
		echo "Invalid";
		}
	}

?>







