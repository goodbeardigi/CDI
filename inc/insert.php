<?php

// $host="localhost"; // Host name 
// $username="root"; // Mysql username 
// $password=""; // Mysql password 
// $db_name="CDI"; // Database name 
// $tbl_name="users"; // Table name 

// // Connect to server and select database.
// mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
// mysql_select_db("$db_name")or die("cannot select DB");

include('connect.php');

// Get values from form 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['name'];
$password=$_POST['password'];

// Insert data into mysql 
$sql="INSERT INTO users (username, password, first_name, last_name, email)VALUES('$username', '$password', '$fname','$lname', '$email')";
$result=mysqli_query($con, $sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Success";
//echo "<BR>";
//echo "<a href='account.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysqli_close($con);
?>