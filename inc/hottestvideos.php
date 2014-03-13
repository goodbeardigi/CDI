<?php

include('inc/connect.php');

$id=$_GET["id"];
$i=0;
$hottestvideos = array();

//$result = mysqli_query($con,"SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id LIMIT 6");

$result = mysqli_query($con,"SELECT * FROM videos WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY")

while($row = mysqli_fetch_array($result)){
	$hottestvideos[$i]['title'] = $row['name'];
	$hottestvideos[$i]['description'] = $row['description'];
	$hottestideos[$i]['user_id'] = $row['user_id'];
	$hottestideos[$i]['category'] = $row['categoriy'];
	$hottestideos[$i]['date_added'] = $row['date_added'];
	$hottestideos[$i]['url'] = $row['url'];
}
echo json_encode($hottestvideos);
?>