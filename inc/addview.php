<?php

include('connect.php');

// Get values from form 
$id=$_POST['id'];

// Insert data into mysql 
$sql="UPDATE video SET views = views+1 WHERE id='$id'";
$result=mysqli_query($con, $sql);

// close connection 
mysqli_close($con);
?>