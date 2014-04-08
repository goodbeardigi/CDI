<?php
include('connect.php');

$result = mysqli_query($con,"SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, videos.length, videos.image, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id WHERE videos.categories_id=$id");
					while($row = mysqli_fetch_array($result)){
				        			echo $row['name'];
				        			echo $row['category'];
				        		}
?>