<?php
$name=$_POST["fname"];
$num=$_POST["number"];
$email=$_POST["email"];
$phone=$_POST["address"];
$gender=$_POST["gender"];
$e=$_POST["category"];
$ef=$_POST["WorkingShiftFrom"];
$g=$_POST["WorkingShiftTo"];
$x=$_POST["startdate"];
$ex=$_POST["notes"];
$conn=mysqli_connect("localhost","root","","mhmsdb") or die("connection failed");

$sql="INSERT INTO tblmaidbooking(fname,number,email,address,gender,category,WorkingShiftFrom,WorkingShiftTo,startdate,notes) VALUES('$name','$num','$email','$phone','$gender','$e','$ef','$g','$x','$ex')";
$result=mysqli_query($conn,$sql);
if(isset($_POST['submit']))
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
    echo "<script>window.location.href ='maid-hiring.php'</script>";
    


mysqli_close($conn);
?>

