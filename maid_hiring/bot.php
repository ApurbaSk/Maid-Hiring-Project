<!-- Created By CampCodes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Online Chatbot in PHP | CampCodes</title> -->
    <link rel="stylesheet" href="css/chatsstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/nav.css">
    <!-- <link rel="stylesheet" href="css/stylex.css"> -->



</head>
<body>
<nav class="navbar background h-nav">
    <ul class="nav-list ul-list">
      <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="login.php">Find a Maid</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="myadmin/adminlogin.php">Admin</a></li>
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
    <div class="wrapper">
        <div class="title">welcome To Help & Support</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Say,Hello to execute</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'bot-message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>