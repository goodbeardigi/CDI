<?php

include('inc/connect.php');
include('header.php');
include('inc/timeago.php');

$id=$_GET["id"];

$result = mysqli_query($con,"SELECT videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, categories.category, categories.id FROM videos INNER JOIN categories ON categories.id=videos.category_id WHERE videos.categories_id=$id");

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
<div id="recent-videos" class=" tab-pane fade active in video-grid">
			<div class="row-fluid">
				<?php
				while($row = mysqli_fetch_array($result)){
					?>
			        <div class="span4 video text-center box"> 
			        	<a href="/video.php?id=<?php echo $row['id'];?>" class="video-overlay">
			        		<div>
			        			<h2><?php echo $row['name'];?></h2>
			        			<span><?php echo $row['category'];?></span>
			        		</div>
			        	</a>    
			       		<img src="images/video-temp.jpg">    
			        </div>
				<?php } ?>
		        
		     </div>
</div>
<?php include('footer.php'); ?>
