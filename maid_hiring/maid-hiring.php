<?php
session_start();
error_reporting(0);
include('includes/db.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Find a Maid Form</title>
        <link rel="stylesheet" href="maidhiring.css">
       

    </head>
    <body>
      
  
    <div class="main"> 
    <h1 class="form-title">FILL YOUR DETAILS HERE</h1>
    <a href="index.php">HOME</a><br><br><br>
        <form id="find  maid" method="post" action="maid_formdb.php">
        <?php if (isset($_GET['msg'])) {
                echo "<p class='msg'>{$_GET['msg']}</p>";
            } ?>
            <div class="user-input-box">
            <label>Name : </label>
            
            <input type="text" name="fname"
            id="name" placeholder="Enter Your  Name">
            
               
            </div>
            
            <div class="user-input-box">
            <label>Contact Number : </label>
            <br>
            <input type="text" name="number" 
            id="name" placeholder="Enter your contact number"></div>
            <div class="user-input-box">
            <label>Email : </label>
            <br>
            <input type="email" name="email"
            id="name" placeholder="Enter Your Valid Email"></div>
            <div class="user-input-box">
            <label>Address(to be hired) : </label>
            <br>
            <input type="text" name="address"
            id="name" placeholder="Enter Your Address">
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
          </div></div>

          <div class="user-input-box">
            <label>Select Service :</label>
            <br>
            <input type="text" list="list" name="category" id="" value="" placeholder="Select Category" required autocomplete="off"><br><br><br>
            <datalist id="list">
            <option value="Dusting">Dusting</option> 
                <option value="Mopping">Mopping</option> 
                <option value="Dusting and Mopping">Dusting and Mopping</option> 
                <option value="Utensil Cleaning">Utensil Cleaning</option> 
                <option value="Toilet Cleaning">Toilet Cleaning</option> 
            </datalist></div>
            <div class="user-input-box">
            <label>Work Shift From : </label>
            <br>
            <input type ="time" name="WorkingShiftFrom">
            </div>
            <div class="user-input-box">
            <label>Work Shift To : </label>
            
            <input type ="time" name="WorkingShiftTo">
            </div>
            <div class="user-input-box">
            <label>Start Date : </label>
            <br>
            <input type="date" name="startdate">
            </div>
            <div class="user-input-box">
            <label>Notes : </label>
            <br>
            <input type="text" name="notes"
            id="name" placeholder="Enter Some Notes"></div>
            
            <div class="form-submit-btn">
            <input type="submit" value="submit"
            name="submit" id="submit"></div>

            
            





        </form> 
</div><!--end find maid-->
</div><!--end main-->
<script>
    setInterval = setTimeout(() => {
        var er = document.querySelector(".msg");
        er.style.backgroundColor = "#ccffbb";
        er.innerHTML = null;

    }, 3000);
</script>
</body>

</html>