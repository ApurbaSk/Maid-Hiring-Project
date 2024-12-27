<html>

<head>
    <link rel="stylesheet" href="../css/admin_panel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        .table th {
            font-size: 25px;
            padding: 10px;
        }

        .table td {
            font-size: 23px;
            padding: 10px;
        }

        .table {
            margin: auto;
            margin-top: 20px;
        }

        .table td a {
            text-decoration: none;
            background: green;
            color: white;
            border-radius: 5px;
            padding: 4px;
            padding-left: 8px;
            padding-right: 8px;
            margin: auto;
        }

        .table td a:hover {
            opacity: .8;
        }
        .logo {
            width: 67px;
            height: 67px;
            float: left;
            margin-top: 0;
            display: flex;
            border-radius: 54%;
        }

        .menubar {
            background: linear-gradient(to right, #00093c, #2d0b00);
        }
    </style>


    <link rel="stylesheet" href="../css/adhead.css">
    <div class="menubar">
        <div class="header">
            <img src="../img/Logo2.jpg" class="logo">

            <ul>
                <li class="active"><a href="admin_panel.php" style="font-size: 30px;">Home</a></li>
               
                <li><a href="user.php" style="font-size:30px;">User</a></li> 
                <li><a href="req.php" style="font-size:30px;">Request List</a></li>
                <li><a href="#" style="font-size: 30px;">Maid &#9662;</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="./maid_add.php" style="font-size: 25px;">Add</li></a>
                            <li><a href="./maid_edit.php" style="font-size: 25px;">Edit</li></a>
                </li>
                         </ul>

                         <li><a href="./adminlogin.php"><i class="fas fa-sign-out-alt"></a></i>

               
            </li>
       

        </ul>
        </div>
    </div>
    </div>
</head>

</html>