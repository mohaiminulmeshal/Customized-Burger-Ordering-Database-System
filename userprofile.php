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
        <a class="navbar-brand" href="userdash.php">CUSTOMIZED BURGER ORDERING SYSTEM: <?php echo $_SESSION['User_ID']?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">

            <li class="nav-item">
              <a class="nav-link active" href="burgerpage.php"> BURGER MENU </a>
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
                    $con = mysqli_connect("localhost", "root","") or die(mysql_error());
                    mysqli_select_db($con, "customized_burger") or die("Cannot connect to database");
                    if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                    }
                    $id = $_SESSION['User_ID'];
                    $q="SELECT * FROM user WHERE User_ID = '$id'";
                    $query = mysqli_query($con,$q);
                    if($query==false)
                      echo $id;
                    $row = mysqli_fetch_assoc($query);
                    $name = $row['User_Name'];
                    $email = $row['Email'];
                    $address = $row['Address'];
                    $phone = $row['Phone'];
                    ?>
                    <div  style="text-align:center; padding-top: 150px; margin-bottom: 55px; padding-left: 1150px; padding-right: 200px">
                    <div class="thumb-content">
                        

                        
                <div class="card shadow-sm mb-2">
                  <div class="card-body d-flex justify-content-start align-items-center mx-4">
                    <div class="d-flex justify-content-between align-items-center">  
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>USER ID: </b><?php echo $id ?></div>
                    </div>
                  </div>
                </div>

                <div class="card shadow-sm mb-2">
                  <div class="card-body d-flex justify-content-start align-items-center mx-4">
                    <div class="d-flex justify-content-between align-items-center">  
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>USER NAME: </b><?php echo $name ?></div>
                    </div>
                  </div>
                </div>

                <div class="card shadow-sm mb-2">
                  <div class="card-body d-flex justify-content-start align-items-center mx-4">
                    <div class="d-flex justify-content-between align-items-center">  
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>EMAIL: </b><?php echo $email ?></div>
                    </div>
                  </div>
                </div>

                <div class="card shadow-sm mb-2">
                  <div class="card-body d-flex justify-content-start align-items-center mx-4">
                    <div class="d-flex justify-content-between align-items-center">  
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>ADDRESS: </b><?php echo $address ?></div>
                    </div>
                  </div>
                </div>

                <div class="card shadow-sm mb-2">
                  <div class="card-body d-flex justify-content-start align-items-center mx-4">
                    <div class="d-flex justify-content-between align-items-center">  
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>PHONE NO: </b><?php echo $phone ?></div>
                    </div>
                  </div>
                </div>
              </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                </body>

    </html>