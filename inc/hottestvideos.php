<?php

include('connect.php');

//$days = $_POST['days'];
$days = 7;
$videos = array();
$p=0;
//$hottestvideos[5]['title']=test;
//$result = mysqli_query($con,"SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id LIMIT 6");

$result = mysqli_query($con,"SELECT * FROM videos WHERE date_added BETWEEN current_date()-$days AND current_date() ORDER BY views DESC LIMIT 6");

while($row = mysqli_fetch_array($result)){
	$videos[$p]['title'] = $row['name'];
	$videos[$p]['id'] = $row['id'];
	$videos[$p]['category'] = $row['category'];
	$videos[$p]['date_added'] = $row['date_added'];
	$videos[$p]['url'] = $row['url'];
	$p++;
}
echo json_encode($videos);
?>