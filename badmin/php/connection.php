<?php
// $con = mysqli_connect("localhost","mybino","Mybino@123","mybino");
$con = mysqli_connect("localhost","root","","mybino");
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>