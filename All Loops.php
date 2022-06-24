<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nested For-Loop</title>
<style>
body{
	background-color:gray;
	padding:0px;
	margin:0px;
	}
		table{
			width: 100%;
			height: auto;
			background-color: yellow;
			border: 2px solid red;
			text-align: center;
			font-size: 16px;
			font-family: arial;
			font-weight: bold;
			text-transform: uppercase;
		}
		table tr > td{
			border-left:1px solid red;
			border-bottom:1px solid red;
			border-top:0px;
			border-right:0px;
		}
</style>
</head>
<form method="POST">
<input type="text" name="first_value" placeholder="Enter Number of Rows"/><br/><br/>
<input type="text" name="second_value" placeholder="Enter Number of Columns"/><br/><br/>
<input type="submit" />
</form>
<?php
if($_POST)
{
	$rows=$_POST["first_value"];
	$cols=$_POST["second_value"];
	if(empty($rows) || empty($cols)){
		echo "<span style=color:white>Plz Fill Required Fields</span>";	
	}
	else if($rows<0 || $cols<0){
		echo "<span style='color:white; font-size:22px';>Plz Enter Positive Values in the Fields</span>";
		}
	elseif(is_numeric($rows) && is_numeric($cols)){
		echo "<center><h2 style=color:white>For Loop Table</h2></center>";
		echo "<table cellpadding=5px; cellspacing=5px; border=1>";
		for($a=0; $a<$rows; $a++){
		echo "<tr>";
			for($b=0; $b<$cols; $b++){
				echo "<td>$a$b</td>";
			}	
			echo "</tr>";
		}
		echo "</table>";
		echo "<center><h2 style=color:white>While Loop Table</h2></center>";
	echo "<table  cellpadding=5px; cellspacing=5px; border=1>";
	$b=0;
	while ($b<$rows) { 
		echo "<tr>";
		$c=0;
		while($c<$cols)
		{
			echo "<td>".$b.$c."</td>";
			$c++;
		}
		echo "</tr>";
		$b++;
	}
	echo "</table>";

	echo "<center><h2 style=color:white>do-while Loop Table</h2></center>";
	echo "<table  cellpadding=5px; cellspacing=5px; border=1>";
	$d=0;
	do{ 
		echo "<tr>";
		$e=0;
		do{
			echo "<td>".$d.$e."</td>";
			$e++;
		}while($e<$cols);
		echo "</tr>";
		$d++;
	}while($d<$rows);
	echo "</table>";
	}
	else{	
		echo "<span style=color:white>Plz Enter numeric Values</span>";
	}	
}
?>
<body>
</body>
</html>