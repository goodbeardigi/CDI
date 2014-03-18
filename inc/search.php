<?php

include('connect.php');

$term=$_GET["term"];
$i=0;
$videos = array();

$result = mysqli_query($con,"SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id WHERE videos.name LIKE '%$term%' OR videos.description LIKE '%$term%'");

while($row = mysqli_fetch_array($result)){
	$videos[$i]['id'] = $row['id'];
	$videos[$i]['title'] = $row['name'];
	$videos[$i]['description'] = $row['description'];
	$videos[$i]['user_id'] = $row['user_id'];
	$videos[$i]['category'] = $row['categoriy'];
	$videos[$i]['date_added'] = $row['date_added'];
	$videos[$i]['url'] = $row['url'];
	$i++;
}
echo json_encode($videos);
?>