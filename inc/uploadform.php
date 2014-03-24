<?php
include('connect.php');

$name = $_POST['name'];
$description =  $_POST['description'];
$user_id =  $_POST['id'];
$categories_id =  $_POST['categories'];
$date_added =  date("Y-m-d");
$url =  $_POST['url'];
$image = $_POST['url']."jpg";
//$length = "";

$ffmpeg = "ffmpeg/ffmpeg";
$videofile= "../videos/".$url;
ob_start();
passthru("$ffmpeg -i \"{$videofile}\" 2>&1");
$duration = ob_get_contents();
ob_end_clean();
 
$search='/Duration: (.*?),/';
$duration=preg_match($search, $duration, $matches, PREG_OFFSET_CAPTURE, 3);
 
$length = $matches[1][0];


mysqli_query($con,"INSERT INTO videos (name, description, user_id, categories_id, date_added, url, image, length) VALUES ('$name', '$description', '$user_id', '$categories_id', '$date_added', '$url', '$image', '$length')");

mysqli_close($con);

?>