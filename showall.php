<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AngeloDGreat's Website</title>
</head>

<body>
<form method="POST" action="dbms2startingproj.php">
<input type ="submit" name="submit" value="Register Another User"></button>
<br>
<br>
<br>
<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="dbms2";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);	
}

$sql="SELECT studid,fname, lname, college FROM accounts";
$result=$conn->query($sql);

if ($result->num_rows>0){
	
	echo "<table border='1' style='background-color:white'>
			<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>College</th>
			<tr>";
		
	while($row=$result->fetch_assoc()){
		
		echo "<tr>";
		echo "<td align='center'>". $row["studid"]. "</td>";
		echo "<td>". $row["fname"]."  ".$row["lname"]. "</td>";
		echo "<td>". $row["college"]. "</td>";
		
	}
		echo "</tr>";
			echo "</table>";
} else {
	echo "0 Results";
}
$conn->close();

	


?>

</body>
</html>