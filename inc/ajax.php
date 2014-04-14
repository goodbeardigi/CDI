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

}

?>