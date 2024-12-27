<?php
session_start();
error_reporting(0);
include('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- *******  Link To CSS Style Sheet  ******* -->
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">


	<!-- *******  Font Awesome Icons Link  ******* -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<!-- *******  Link To Goggle Fonts  *******  -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&amp;display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  

	<title>Contact Section</title>
</head>
<body>
<nav class="navbar background h-nav">
    <ul class="nav-list ul-list">
      <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="login.php">Find a Maid</a></li>
      <li><a href="myadmin/adminlogin.php">Admin</a></li>
      <li><a href="bot.php">Help & support</a></li>
      
    </ul>
    <!-- <div class="rightnav">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">search</button>
        </div> -->
    <div class="burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>


    </div>

  </nav>
  <div class="container">
    
    <main class="row">
      <section class="col left">
        <div class="contactTitle">
          <h2>Get in Touch</h2>
          <p class="clr"><h3>Please fill out this form and leave your question. We will contact you within 24 hours</h3></P>
          </div>
          <div class="contactInfo">
            <div class="iconGroup">
              <div class="icon">
                <i style="font-size:24px" class="fas">&#xf095;</i>
              </div>
              <div class="details">
                <span>Phone</span>
                <span>+919876541230</span>
              </div>
            </div>
            <div class="iconGroup">
              <div class="icon">
                <i style='font-size: 24px' class='far'>&#xf0e0;</i>
              </div>
              <div class="details">
                <span>Email</span>
                <span>maid4u@info.in</span>
              </div>
            </div>
          

            <div class="iconGroup">
              <div class="icon">
                <i style="font-size:24px"class="fas">&#xf4d7</i>
              </div>
              <div class="details">
                <span>Location</span>
                <span>College Para,Raiganj,West Bengal 733134 </span>
              </div>
            </div>
        </div>

      </section>

     
      <section class="col right">
				
				<!--  *******   Form Starts   *******  -->

				<form class="messageForm"
         action="contact_process.php" method="POST">
					
					<div class="inputGroup halfWidth">
						<input type="text" name="name" required="required">
						<label>Your Name</label>
					</div>

					<div class="inputGroup halfWidth">
						<input type="email" name="email" required="required">
						<label>Email</label>
					</div>

					<div class="inputGroup fullWidth">
						<input type="int" name="contact" required="required">
						<label>Contact no</label>
					</div>

					<div class="inputGroup fullWidth">
						<textarea  name="say"required="required"></textarea>
						<label>Say Something</label>
					</div>

					<div class="inputGroup fullWidth">
						<button>Send Message</button>
					</div>

        </form>

				<!--  *******   Form Ends   *******  -->
			</section>

    </main>
  </div>
</body>
</html>