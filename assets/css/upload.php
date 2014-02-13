<?php

include('inc/connect.php');
include('header.php');
include('inc/timeago.php');

$id=$_GET["id"];

$result = mysqli_query($con,"SELECT * FROM videos WHERE id=$id");

while($row = mysqli_fetch_array($result)){
	$title = $row['name'];
	$description = $row['description'];
	$user_id = $row['user_id'];
	$categories_id = $row['categories_id'];
	$date_added = $row['date_added'];
	$url = $row['url'];
}
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit" id="video-unit">
		<div class="container">
			<div class="row">

			</div>
		</div>
</div>

<?php include('footer.php'); ?>
