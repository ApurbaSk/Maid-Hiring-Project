
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8"/>
    <title>Sign up</title>
    <link rel="stylesheet" href="css/reg.css"/>

</head>
    
          

<body>
    
<?php
require("includes/db.php");
 if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $query    = "INSERT into reg (username, password, email)
                 VALUES ('$username', '$password', '$email')";
     $result = mysqli_query($con, $query) or die(mysql_error());
    if ($result) {
        echo '<script>alert("You are registered successfully")</script>';
echo "<script>window.location.href ='maid-hiring.php'</script>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='index.php'>registration</a> again.</p>
              </div>";
    }  
} 
else {


?>


<div class="loginbox">
            <h2>Sign UP</h2>
            <form class="form" action="" method="POST">
                <label for="User Name"><span class="required"></span>User Name</label>
                <input type="text" class="login-input" name="username" placeholder="User Name">

                <label for="email"><span class="required"></span>Email</label>
                <input type="text" class="login-input" name="email" placeholder='Email'>

                <label for="password"><span class="required"></span>Password</label>
                <input type="password" class="login-input" name="password" placeholder="Password">
                <input type="submit" value="Sign in">
                <br>
                <p class="link">Already Have an account?<a href="Login.php">Log in</a></p>
                

                <p class="link"> <a href="index.php">Home</a> </p>
            </form>
        </div>
    
        </form>
        
        <?php
     }
     ?>

  
</body>

</html>