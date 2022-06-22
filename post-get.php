<?php
if($_POST){
$fname=$_POST['abc'];
$lname=$_POST['xyz'];
echo "your first name is: ".$fname."<br />"."Your last name is: ".$lname."<br />";}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="POST">
<input type="text" name="abc" placeholder="Enter Name" />
<br />
<input type="text" name="xyz" placeholder="Enter Lname" />
<br />
<input type="submit" />
</form>
</body>
</html>
