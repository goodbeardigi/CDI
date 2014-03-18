<?php
//include 'http://carbon.jamescobbett.co.uk/services/config.php';


// Create connection
//$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
include('connect.php');

$user = array();

$email = $_POST['email'];

$results = mysqli_query($con,"SELECT * FROM user WHERE email = '$email'");
if (mysqli_num_rows($results)==0){
	echo 'New';
} else {
	echo 'Existing'; 
}
?>