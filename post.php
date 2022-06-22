<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="GET">
<input type="text" name="abc" placeholder="Enter name" />
<br />
<input type="text" name="xyz" placeholder="Enter Age" />
<br />
<input type="submit" />
</form>
</body>
</html>
<?php
if($_GET){
$name=$_GET['abc'];
$age=$_GET['xyz'];
echo "your name is: ".$name."<br />"."your age is: ".$age;

}
?>