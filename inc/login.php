<?php
include('connect.php');

$result = mysqli_query($con,"SELECT * FROM users WHERE username = 'admin'AND password='password'");

while($row = mysqli_fetch_array($result)){
	echo $row['username'];
}
?>
