<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=cp_db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //echo "Connection successful ";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_GET['Forward']))
{
	echo "F";
	$sql = "INSERT INTO cp(value) VALUES('F')";
	$conn->query($sql);
}


else if(isset($_GET['Stop']))
{
	echo "S";
	$sql = "INSERT INTO cp(value) VALUES('S')";
	$conn->query($sql);
}

else if(isset($_GET['Backward']))
{
	echo "B";
	$sql = "INSERT INTO cp(value) VALUES('B')";
	$conn->query($sql);
}

else if(isset($_GET['Right']))
{
	echo "R";
	$sql = "INSERT INTO cp(value) VALUES('R')";
	$conn->query($sql);
}

else if(isset($_GET['Left']))
{
	echo "L";
	$sql = "INSERT INTO cp(value) VALUES('L')";
	$conn->query($sql);
}

?>