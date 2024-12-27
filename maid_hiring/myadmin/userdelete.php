<?php
if(isset($_GET['id']))
{
	
	$servername = "localhost";
	$database = "mhmsdb";
	$username = "root";
	$password = "";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$userId = $_GET['id'];
	// write sql query for inserting data into users table.	
	$sql = "delete from reg where id = '$userId'";

	if ($conn->query($sql) === TRUE) {
	header("Location:user.php?q=deleted");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

} 
?>