<?php
   session_start(); //starts the session
   require 'dbconfig/config.php';
?>
<!DOCTYPE html>
    <html>
        <head>
            <title> User Dashboard </title>
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="style2.css">
         <link rel="preconnect" href="https://fonts.gstatic.com">

        </head>
        <body style="background-image: url('image/bj3.jpg'); background-repeat: no-repeat;">

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #008000;">
      <div class="container-fluid">
        <a class="navbar-brand" href="userprofile.php">CUSTOMIZED BURGER ORDERING SYSTEM: <?php echo $_SESSION['User_ID']?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">

            <li class="nav-item">
              <a class="nav-link active" href="burgerpage.php">BURGER MENU</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="userprofile.php"> ACCOUNT DETAILS </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="updateprofile.php"> UPDATE PROFILE </a>
            </li>

                 <li class="nav-item">
              <a class="nav-link" href="index.php"> LOGOUT </a>
            </li>



          </ul>
        </div>
      </div>
    </nav>


<?php

                ?>
                <form action="update.php" method="POST" style="text-align:center; padding-top: 200px; padding-left: 600px; font-size: 240%">
                      <select name="drop" class="btn btn-secondary">
                        <option value="User_Name">NAME</option>
                        <option value="Email">EMAIL</option>
                        <option value="Address">ADDRESS</option>
                        <option value="Phone">PHONE NO.</option>
                        <option value="Password">PASSWORD</option>


                      </select>
                      <input type ="text" style="font-size: 55%" name="value"/>
                      <input type="submit" class="btn btn-primary" value="Update"/>
                      </form>

              <?php

              ?>
      








            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                </body>

    </html>