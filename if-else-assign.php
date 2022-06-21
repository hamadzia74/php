<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div style="width:50%;
height:500px; float:left; background-color:#F5E50B;">
<form method="post">
<input type="text" name="f_i" placeholder="Enter Number OR Grade" />

<input type="submit" />
</form>
<div style="width:40%; height:200px;
float:left;
background-color:#F38408;">
<?php
if($_POST){
	$first=$_POST['f_i'];
	if(empty($first)){
		echo "Kindly fill this field";
		}
		elseif($first<0 || $first >100){
			echo "Kindly put value in b/w 0 to 100";
			}
			elseif($first>=90 && $first<=100){
				echo "Your Grade is A";}
				elseif($first>=80 && $first<90){
				echo "Your Grade is B";}
				elseif($first>=70 && $first<80){
				echo "Your Grade is C";}
				elseif($first>=60 && $first<70){
				echo "Your Grade is D";}
				elseif($first>=50 && $first<60){
				echo "Your Grade is E";}
				elseif($first>=0 && $first<50){
				echo "Your Grade is F";}
				elseif($first=="A" || $first=="B" || $first=="C" || $first=="D" || $first=="E" || $first=="F" || $first=="a" || $first=="b" || $first=="c" || $first=="d" || $first=="e" || $first=="f" ){
					if($first =="A" || $first == "a"){
			echo "your marks are b/w 90 to 100";
			}
			elseif($first =="B" || $first == "b"){
						echo "your marks are b/w 80 to 90";
						}
						elseif($first =="C"|| $first == "c"){
						echo "your marks are b/w 70 to 80";
						}
						elseif($first =="D" || $first == "d"){
						echo "your marks are b/w 60 to 70";
						}
						elseif($first =="E" || $first == "e"){
						echo "your marks are b/w 50 to 60";
						}
						elseif($first =="F" || $first == "f"){
						echo "You are Fail";
						}
				}else{
						echo "kindly put value in  b/w AtoF";
					
					
						}
				}

?>





</div>
</div>
</body>
</html>