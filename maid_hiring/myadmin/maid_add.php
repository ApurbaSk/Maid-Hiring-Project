<?php
session_start();
error_reporting(0);
include('myadmin/editmaiddb.php');


 ?>
<!DOCTYPE html>
<head>
	
    <link rel="stylesheet" type="text/css" href="../css/maidform.css">


</head>
   
  <body>
    
    
    <div class="container">
      <h1 class="form-title">Maid add</h1><br>
      <a href="./admin_panel.php">ADMIN PANEL</a><br>
      
      <form action="editmaiddb.php" method="post" enctype="multipart/form-data">
     <div class="main-user-info">
      <!-- <input type="hidden" name="id" value=""> -->
      <?php if (isset($_GET['msg'])) {
                echo "<p class='msg'>{$_GET['msg']}</p>";
            } ?>
          <div class="user-input-box">
            <label for="fullname"> FullName</label>
            <input type="text"
                    id="fullname"
                    name="fullname"
                    placeholder="Enter Full Name" required="required"/>
          </div>
          <div class="user-input-box">
          <label for="Category">Category</label><br>
        
          <input type="text" list="list" name="category" id="" value="" placeholder="Select Category" required autocomplete="off"><br><br><br>
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
                    placeholder="Enter Email" required="required"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter Phone Number" required="required"/>
          </div>
          <div class="user-input-box">
          <label for="Date of Birth">Date of Birth</label>
          <input type="date"
          id="dob"
          name="dob" required="required">
          </div>
            
         
          
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
          </div>
          <div class="user-input-box">
          <label for="Experience">Experience</label>
          <textarea name="ex" id="ex" placeholder="Your Experience" required="required"></textarea>
          </div>
          <div class="user-input-box">
          <label id="im">Image:</label>
            <input type="file" name="image" id="image" required="required"/>
          </div>
        <div class="form-submit-btn">
          <input type="submit" value="Submit">
        </div>
      </form>

    <script>
    setInterval = setTimeout(() => {
        var er = document.querySelector(".msg");
        er.style.backgroundColor = "#ccffbb";
        er.innerHTML = null;

    }, 3000);
</script>
  </body>
</html>
