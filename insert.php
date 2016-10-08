<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AngeloDGreat's Website</title>
</head>

<body>

<form method="POST" action="showall.php">
<input type ="submit" name="submit" value="Check Registered Users"></button>
<br>
<br>
<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="dbms2";

$studid=$_POST['studid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$college=$_POST['college'];



$conn = mysql_connect($servername,$username,$password);
if (!$conn){
	die('Could not connect: ' .mysql_error());
	
}

mysql_select_db($dbname,$conn);

if(empty($studid)||empty($fname)||empty($lname)||empty(college)){
	echo "Missing Information";
}else{
	

$sql="INSERT INTO `accounts` VALUES ('$studid','$fname','$lname','$college')";

if (!mysql_query($sql,$conn)){
	die('Error: ' .mysql_error());
}
	echo "Success";
	mysql_close($conn);
}
?>


</body>
</html>