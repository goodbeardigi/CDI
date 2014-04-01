<?php
include('connect.php');

$result = mysqli_query($con,"SELECT videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, users.username, users.id FROM videos INNER JOIN users ON users.id=videos.user_id WHERE videos.id=$id");

while($row = mysqli_fetch_array($result)){
	$title = $row['name'];
	$description = $row['description'];
	$user_id = $row['user_id'];
	$username = $row['username'];
	$categories_id = $row['categories_id'];
	$date_added = $row['date_added'];
	$url = $row['url'];
}
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit" id="video-unit">
		<div class="container">
			<div class="row center">
				<video class="span11 center" style="background:#000" id="video" preload="auto" autobuffer="" controls="" poster="">
				  	<?php echo '<source src="videos/'.$url.'" type="video/mp4">'; ?>
				  	<!--<source src="movie.ogg" type="video/ogg">-->
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
</div>