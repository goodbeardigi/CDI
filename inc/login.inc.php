<?php 
// Include required MySQL configuration file and functions 
//require_once('config.inc.php'); 
require_once('functions.inc.php'); 
include('connect.php');
 
// Start session 
session_start(); 
 //echo "test";
 
// Check if user is already logged in 
if ($_SESSION['logged_in'] === true) { 
 // If user is already logged in, redirect to main page 
 //redirect('../index.php'); 
} else { 
	//echo "test";
 // Make sure that user submitted a username/password and username only consists of alphanumeric chars
 
//  if ( (!isset($_POST['username'])) || (!isset($_POST['password'])) 
// OR 
//  (!ctype_alnum($_POST['username'])) ) { 
//  redirect('../account.php'); 
//  } 
 
 // Connect to database 
//  $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, 
// DB_DATABASE); 
 
 // Check connection 
//  if (mysqli_connect_errno()) { 
//  printf("Unable to connect to database: %s", 
// mysqli_connect_error()); 
//  exit();  }
 
 // Escape any unsafe characters before querying database 
 //$username = $mysqli->real_escape_string($_POST['username']); 
 //$password = $mysqli->real_escape_string($_POST['password']); 
 $username = $_POST['username'];
 $password = $_POST['password'];
 // Construct SQL statement for query & execute 
//$sql = "SELECT * FROM users WHERE username = $username"; 
 //$sql = "SELECT * FROM users WHERE username = $username"; 
 //$sql = "SELECT * FROM users WHERE username=$username"; 

 //$result = $mysqli->query($con, $sql); 
 //$result = mysqli_query($con,"SELECT * FROM users"); 
 $result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username'AND password='$password'");
 // If one row is returned, username and password are valid 
 if (mysqli_num_rows($result) == 1) { 
	 // Set session variable for login status to true 
	 $_SESSION['logged_in'] = true; 
	 //Get Username and id of person who has logged in
	 while($row = mysqli_fetch_array($result))
	   {
	   	$_SESSION['username'] = $row['username'];
	   	$_SESSION['id'] = $row['id'];
	   	   echo $row['username'];
	   }
 //redirect('../index.php'); 
 } else { 
 // If number of rows returned is not one, redirect back to login screen 

 //redirect('../account.php'); 
 	echo "failed";
 } 
} 
?> 
