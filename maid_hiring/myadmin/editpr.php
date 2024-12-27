<?php

// file name update_profile.php
if(isset($_GET['id']) && $_GET['id'] > 0)
{ 
// database connection, to get user data along with images
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
	$sql = "SELECT * FROM tblmaid where id = '$userId'";
	$exe_query = $conn->query($sql);
	$result = $exe_query->fetch_assoc();
	
?>


<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../css/maidform.css">
	
	
<body>
<div class="container">
<form action="updateedit.php" method="post" enctype="multipart/form-data">

<div class="main-user-info">
  
  <div class="user-input-box">
            <label for="fullname"> FullName</label>
            <input type="text"
                    id="fullname"
                    name="fullname"
                    placeholder="Enter Full Name" required="required" value="<?php echo $result['fullname'];?>"/>
          </div>
          <div class="user-input-box">
          <label for="Category">Category</label><br>
        
          <input type="text" list="list" name="categorise" id="" value="<?php echo $result['category'];?>" placeholder="Select Category" required autocomplete="off"><br><br><br>
            <datalist id="list">
            <option value="Dusting">Dusting</option> 
                <option value="Mopping">Mopping</option> 
                <option value="Dusting and Mopping">Dusting and Mopping</option> 
                <option value="Utensil Cleaning">Utensil Cleaning</option> 
                <option value="Toilet Cleaning">Toilet Cleaning</option> 
            </datalist></div>

        
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email" value="<?php echo $result['email'];?>"required="required"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"value="<?php echo $result['phoneNumber'];?>"
                    placeholder="Enter Phone Number" required="required"/>
          </div></div>
          <div class="user-input-box">
          <label for="Date of Birth">Date of Birth</label>
          <input type="date"
          id="dob" value="<?php echo $result['dob'];?>"
          name="dob" required="required">
          </div>
            
         
          
        
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male"  value="<?php echo $result['gender'];?>">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="<?php echo $result['gender'];?>">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other"  value="<?php echo $result['gender'];?>">
            <label for="other">Other</label>
          </div>
          <div class="user-input-box">
          <label for="Experience">Experience</label>
          <textarea name="ex" id="ex" placeholder="Your Experience" required="required" value="<?php echo $result['ex'];?>"></textarea>
          </div>
          
    <div>
   <input  type="file" name="image" id="image"> <br/>
	<img  height="50" src="<?php echo $result['image'];?>">
	<input type="hidden" name="profile_pic_update" value="<?php echo $result['image'];?>">
	<input type="hidden" name="id" value="<?php echo $result['id'];?>">	</div>
  <br/>
  <div class="form-submit-btn">
  <input type="submit" value="Update" name="submit"></div>
</form>
</div>

</body>
</html>

<?php }?>




