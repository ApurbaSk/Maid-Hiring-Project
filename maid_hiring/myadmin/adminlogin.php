<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css"/>
</head>
<body>
<?php
    require('./admindb.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM tbladmin WHERE username='$username'
        AND password='" . ($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            echo '<script>alert("Wellcome admin")</script>';
            echo "<script>window.location.href ='admin_panel.php'</script>";

        
        } else {
        echo '<script>alert("Incorrect Username or password")</script>';  
        echo "<script>window.location.href ='adminlogin.php'</script>";

        }
    } else {
?>
    <form class="form" method="post" name="login">
        <div class="loginbox">
      
        <h1 class="login-title"> Admin Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/><br>
        <p class="link"><a href="../index.php">Home</a><p>

         
        
        </div>
  </form>
<?php
    }
?>
</body>
</html></span>