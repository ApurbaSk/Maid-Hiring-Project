<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/details.css">
    <link rel="stylesheet" href="css/nav.css">

</head>
<body>
<nav class="navbar background h-nav">
    <ul class="nav-list ul-list">
      <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="login.php">Find a Maid</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="Admin/login.php">Admin</a></li>
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
    <header>
        <nav>
            <!-- <a href="">Home</a>
            <a href="">Contacts</a>
            <a href="">Info</a> -->
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="img/img1.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">BOOK YOUR MAID NOW FROM</div>
                    <div class="topic">MAID4U</div>
                    <div class="des">
                        <!-- lorem 50 -->
"My name is Joee. I am your maid and I have five years of experience in cooking and house cleaning. I am here to assist with all your household needs, ensuring everything is clean, organized, and well-cooked. Please feel free to let me know if there is anything specific you need help with. I look forward to working with you. Thank you."
                    </div>
                    <div class="buttons">
                        <!-- <button>SEE MORE</button>
                        <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img2.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">BOOK YOUR MAID NOW FROM</div>
                    <div class="topic">MAID4U</div>
                    <div class="des">
 "My name is Dysi, and I am 29 years old. I am your house cleaner and I have eight years of experience in house cleaning. I am here to ensure your home is spotless and well-organized. If there is anything specific you need assistance with, please let me know. I look forward to working with you. Thank you."
                    </div>
                    <div class="buttons">
                        <!-- <button>SEE MORE</button>
                        <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img3.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">BOOK YOUR MAID NOW FROM</div>
                    <div class="topic">MAID4U</div>
                    <div class="des">
"My name is Root. I am 28 years old and I have seven years of experience as a babysitter, as well as in cooking and house cleaning. I am here to provide the best care for your children and assist with household tasks to ensure everything runs smoothly. If there is anything specific you need help with, please feel free to let me know. I look forward to working with you and your family. Thank you."
                    </div>
                    <div class="buttons">
                        <!-- <button>SEE MORE</button>
                        <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img4.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">BOOK YOUR MAID NOW FROM</div>
                    <div class="topic">MAID4U</div>
                    <div class="des">
"My name is Ani. I am a cook with ten years of experience in the culinary field. I am 32 years old, and I specialize in preparing delicious and healthy meals. I am here to ensure that your dining experience is enjoyable and to cater to your culinary preferences. Please feel free to let me know if there are any specific dishes or dietary needs you have. I look forward to cooking for you. Thank you."
                    </div>
                    <div class="buttons">
                        <!-- <button>SEE MORE</button>
                        <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="img/img1.jpg">
                <div class="content">
                    <div class="title">
                        JOEE
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img2.jpg">
                <div class="content">
                    <div class="title">
                        DYSI
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img3.jpg">
                <div class="content">
                    <div class="title">
                        ROOT
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img4.jpg">
                <div class="content">
                    <div class="title">
                        ANI
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>

    <script src="js/details.js"></script>
</body>
</html>