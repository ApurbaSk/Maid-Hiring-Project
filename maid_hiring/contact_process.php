<?php
$fisname=$_POST["name"];
$eemail=$_POST["email"];
$cont=$_POST["contact"];
$say=$_POST["say"];
$conn=mysqli_connect("localhost","root","","mhmsdb") or die("connection failed");
$sql="INSERT INTO user_info(name,email,contact,say) VALUES('{$fisname}','{$eemail}','{$cont}','{$say}')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo '<script>alert("You are information is submitted")</script>';
echo "<script>window.location.href ='contact.php'</script>";
} else {
    echo '<script>alert("Something wrong happened")</script>';
echo "<script>window.location.href ='contact.php'</script>";}
mysqli_close($conn);
?>