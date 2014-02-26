<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="CDI"; // Database name 
$tbl_name="users"; // Table name 
$t = "account.php";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$password2=$_POST['password'];
$password3=md5($password2);

// Insert data into mysql 
$sql="INSERT INTO $tbl_name( username, password)VALUES( '$name', '$password3')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
header("Location: $t"); 

//echo "Successful";
//echo "<BR>";
//echo "<a href='login.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>