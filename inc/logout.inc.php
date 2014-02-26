<?php 
// Start session 
session_start(); 
 
// Include required functions file 
require_once('functions.inc.php'); 
 
// If not logged in, redirect to login screen 
// If logged in, unset session variable and display logged-out message 
if (check_login_status() == false) { 
 // Redirect to 
 redirect('../account.php'); 
} else { 
 // Kill session variables 
 unset($_SESSION['logged_in']); 
 unset($_SESSION['username']); 
 
 // Destroy session 
 session_destroy(); 
} 
?> 
<?php
include('header.php');
?>
<!DOCTYPE html PUBLIC> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

<body> 
<p>You have successfully logged out</p>
  
</body> 
</html> 
<?php include('footer.php'); ?>