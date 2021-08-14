<?php
   session_start(); //starts the session
   require 'dbconfig/config.php';
?>
<!DOCTYPE html>
    <html>
        <head>
            <title> Admin Dashboard </title>
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="style2.css">
         <link rel="preconnect" href="https://fonts.gstatic.com">

        </head>
        <body>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #008000;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CUSTOMIZED BURGER ORDERING SYSTEM: <?php echo $_SESSION['ID']?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            
            <li class="nav-item">
              <a class="nav-link active" href="categories.php">Edit Burger Menu</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="AddFood.php">Add Burger</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="AddAddons.php">Add AddOns</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="DeleteFood.php">Delete Burger</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="DeleteAddons.php">Delete AddOns</a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link active" href="adminorderstatus.php"> Order Status </a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" href="index.php"> Logout </a>
            </li>



          </ul>
        </div>
      </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/bg1.jpg" alt="bg1" width="1920" height="893">
          <div class="carousel-caption">
              <h2  style="color:white;"><b> Don't Starve </b></h2>
            <p5 style="font-family:courier;color:white;font-size: 150%"><b> Just Order </b></p5>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="image/bg2.jpg" alt="bg2" width="1920" height="893">
          <div class="carousel-caption">
              <h2 style="color:black;"><b> Order Now! </b></h2>
            <p3 style="font-family:courier;color:black;font-size: 150%"><b> Get delivery within 20min </b></p3>
          </div>   
        </div>

      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>






            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                </body>

    </html>