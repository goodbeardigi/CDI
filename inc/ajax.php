<?php

include('connect.php');

//echo $_POST['cat_id'];
$id = $_POST['cat_id'];
$offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
$postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();


$run = mysqli_query($con, "SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, videos.length, videos.image, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id WHERE videos.categories_id=$id ORDER BY id DESC LIMIT ".$postnumbers." OFFSET ".$offset);


while($row = mysqli_fetch_array($run)) {
	
	$content = substr(strip_tags($row['post_content']), 0, 500);
	
	echo '<h1><a href="'.$row['guid'].'">'.$row['post_title'].'</a></h1><hr />';
	echo '<p>'.$content.'...</p><hr />';

	 echo '<div class="col-lg-4 video text-center box">';
	 echo '<a href="/video.php?id='.$row['id'].'" class="video-overlay">';
	 echo '<div>';
	 echo '<h2>.'$row['name'].'</h2>';
	 echo '<span>.'$row['category'].'</span>';
	echo '</div>';
	echo '</a>';    
	echo '<img src="videos/thumbnails/.'$row['image'].'" alt=".'$row['name'].'" />';
	echo '<div class="overlay">';
	echo '<span class="span-title">.'$row['name'].'</span>';
	echo '<span class="span-length">.'$row['length'].'</span>';
	echo '</div>';
	echo '</div>';

}

?>