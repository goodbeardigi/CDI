<?php
include('connect.php');

$user = array();

$email = $_POST['email'];

$results = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");
if(mysqli_num_rows($results)==0){
	echo 'New';
} else {
	echo 'Existing'; 
}
?>