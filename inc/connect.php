<?php
// Create connection
$con=mysqli_connect("10.168.1.52","cdisport_cdi","zQDjg3ybyWQKcqs","cdisport_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else {
 	echo "Connected to database.";
 }
?>