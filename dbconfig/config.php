<?php
$con=mysqli_connect ("localhost", "root", "") or die ("Unable to connect");
mysqli_select_db($con,"customized_burger") or die("Cannot connect to database"); //Connect to database
?>