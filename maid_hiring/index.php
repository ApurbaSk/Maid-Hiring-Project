
<?php
session_start();
error_reporting(0);

include('includes/db.php');
?>
<!doctype html>

<head>
    <title>Maid Hiring Management System || Home Page </title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <nav class="navbar background h-nav">
        <ul class="nav-list ul-list">
            <div class="logo"><img src="img/Logo2.jpg" alt="logo"></div>
            <li><a href="#home">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="login.php">Find a Maid</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="myadmin/adminlogin.php">Admin</a></li>
            <li><a href="bot.php">Help & support</a></li>

        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>


        </div>

    </nav>
    <section class="background firstSection" id="home">
        <div class="box-main">
            <div class="firstPart">
                <p class=" text-big Main-txt">Welcome to Maid 4 U </p>
                <p class="text-small">Maid4U is the simplest way to get your life in order with the right domestic
                    help.Our Featured Services hire professionals,experienced maids specifically for your needs</p><br>
                <p class="text-small">Click 'Details' To Know About The Maid in Details
                </p>
                <div class="buttons">

                    <button class="btn"><a href="details.php"> Details</button></a>
                </div>
            </div>
            <div class="secondPart">
                <img src="img/hd2.jpg" alt="Maid Image">
            </div>

        </div>
    </section>

    <section class="section">
        <div class="paras">
            <p class="sectionTag text-big">Housekeeping Maid Work Speciality </p>
            <p class="sectionSubTag text-small">A cleaning maid ensures a spotless and organized home by performing
                various housekeeping tasks such as dusting, vacuuming, mopping, and sanitizing surfaces. They also
                handle laundry, dishwashing, and tidying up rooms. Reliable and efficient, a cleaning maid helps
                maintain a healthy and comfortable living environment. Their attention to detail and dedication to
                cleanliness alleviate household burdens, allowing residents to enjoy more leisure time. Employing a
                cleaning maid can significantly enhance the quality of home life.</p>
            </p>
        </div>
        <div class="thumbnail">
            <img src="img/m3.jpg" alt="Maid Image">
        </div>
    </section>

    <section class="section Left">
        <div class="paras">
            <p class="sectionTag text-big">Nanny Maid Work Speciality </p>
            <p class="sectionSubTag text-small">A nanny specializes in providing comprehensive childcare, focusing on
                the safety, well-being, and development of the children under their care. Their responsibilities include
                feeding, bathing, dressing, and supervising children, as well as organizing and engaging them in
                age-appropriate educational and recreational activities. Nannies often assist with homework, plan
                playdates, and manage children's schedules, including school, extracurricular activities, and medical
                appointments. They ensure a nurturing environment, promoting emotional and social development.
                Additionally, nannies may handle light housekeeping related to the children, such as tidying up play
                areas, children's laundry, and meal preparation. Their role is integral to the child's growth, providing
                a stable and supportive presence in the household.
            </p>

            </p>
        </div>
        <div class="thumbnail">
            <img src="img/m9.jpg" alt="Maid Image">
        </div>
    </section>

    <section class="section">
        <div class="paras">
            <p class="sectionTag text-big">Cooking Maid Work Speciality </p>
            <p class="sectionSubTag text-small">A cooking maid specializes in preparing and serving meals, often
                focusing on creating a variety of dishes that cater to the specific tastes and dietary needs of the
                household they serve. Their expertise spans meal planning, grocery shopping, and maintaining a clean and
                organized kitchen. Skilled in a range of culinary techniques and cuisines, they ensure meals are
                nutritious, delicious, and presented with care. Additionally, a cooking maid might handle other related
                tasks such as preserving ingredients, baking, and sometimes even meal prepping for the week ahead,
                providing a seamless dining experience for their employers.</p>

            </p>
        </div>
        <div class="thumbnail">
            <img src="img/m6.jpg" alt="Maid Image">
        </div>
    </section>

    <footer>
        <div class="f">

            <h2>OUR SERVICES</h2><br>
            <p>User Registration and Authentication <br><br>Profile Management<br> <br>Booking and
                Scheduling<br><br>Background Checks<br> <br>Support and Feedback</p>
        </div>
        <p class="text-footer">
            Copyright &copy;2027 www.Maid4U.com - all rights reserved
        </p>

        </div>
    </footer>

</body>

</html>