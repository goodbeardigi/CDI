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
$username=$_POST['name'];
$lastname=$_POST['password'];

// Insert data into mysql 
$sql="INSERT INTO users (username, password)VALUES('$username', '$password')";
$result=mysqli_query($con, $sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='account.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysqli_close($con);
?>