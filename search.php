<?php

include('inc/connect.php');
include('header.php');
include('inc/timeago.php');

$term=$_POST["term"];
$i=0;
$videos = array();

if($term != ""){
	$result = mysqli_query($con,"SELECT videos.id, videos.image, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id WHERE videos.name LIKE '%$term%' OR videos.description LIKE '%$term%'");

?>
<div class="container">
	<div id="recent-videos" class=" tab-pane fade active in video-grid">
		<h2 id="searchterm">Searching: <?php echo $term; ?></h2>
					<?php
					while($row = mysqli_fetch_array($result)){
						//if($i===0){
						//
						//}
						?>
				        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 video text-center box"> 
				        	<a href="/video.php?id=<?php echo $row['id'];?>" class="video-overlay">
				        		<div>
				        			<h2><?php echo $row['name'];?></h2>
				        			<span><?php echo $row['category'];?></span>
				        		</div>
				        	</a>    
				       		<img src="videos/thumbnails/<?php echo $row['image'] ?>">    
				        </div>
				        <!--<?php if($i===2){
							?></div><?php
							$i=-1;
						} ?>-
					<?php $i++; } ?>-->
	</div>
</div>
<?php
}else{
	?>
	<div class="container">
		<h1>No search term given</h1>
	</div>	
<?php
}
?>
<?php include('footer.php'); ?>