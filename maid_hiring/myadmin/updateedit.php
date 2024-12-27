<?php
if(isset($_POST))
{
	
	$maid_name=$_POST["fullname"];
$categorise=$_POST["category"];
$email=$_POST["email"];
$phone=$_POST["phoneNumber"];
$dob = $_POST["dob"];
$gender=$_POST["gender"];
$ex=$_POST["ex"];
$image=$_FILES["image"];
	
	if(isset($_FILES) && !empty($_FILES))
	{
		$filename = $_FILES["image"]["fullname"];
		$image = "../img/".$filename;
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $image))
		{
			
		}else{
		$image = $_POST['profile_pic_update'];
		}		
	}
	
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

	// write sql query for inserting data into users table.	
	$sql = "update tblmaid set  fullname = '$maid_name',category='$categorise', email = '$email' ,phoneNumber='$phone',dob='$dob',gender='$gender',ex='$ex', image ='$image' where id = '$id'";

	if ($conn->query($sql) === TRUE) {
	header("Location:./maid_edit.php");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

} 
?>