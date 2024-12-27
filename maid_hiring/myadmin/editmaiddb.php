<?php
$conn=mysqli_connect("localhost","root","","mhmsdb");


$maid_name=$_POST["fullname"];
$categorise=$_POST["category"];
$email=$_POST["email"];
$phone=$_POST["phoneNumber"];
$dob = $_POST["dob"];
$gender=$_POST["gender"];
$ex=$_POST["ex"];
$image=$_FILES["image"];

echo "<pre>";
print_r($image);
echo "</pre>";
move_uploaded_file($image['tmp_name'],"../img/".$image['name']);
$img="../img/".$image['name'];

$sql="INSERT INTO tblmaid(fullname,category,email,phoneNumber,dob,gender,ex,image) VALUES('$maid_name','$categorise','$email','$phone','$dob','$gender','$ex','$img')";
$result=mysqli_query($conn,$sql);
if(isset($_POST['submit'])){
    header("location:./maid_edit.php");

    }
    else{
        echo '<script>alert("Added Successfully")</script>';
echo "<script>window.location.href ='maid_add.php'</script>";}


mysqli_close($conn);
?>

