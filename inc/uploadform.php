<?php
include('connect.php');

$name = $_POST['name'];
$description =  $_POST['description'];
$user_id =  "";
$categories_id =  $_POST['categories'];
$date_added =  "";
$url =  $_POST['url'];

mysqli_query($con,"INSERT INTO videos (name, description, user_id, categories_id, date_added, url) VALUES ('$name', '$description', '$user_id', '$categories_id', '$date_added', '$url' )");

mysqli_close($con);

?>