<?php

include('inc/connect.php');
include('header.php');
include('inc/timeago.php');

$id=$_GET["id"];
$i=0;
$result = mysqli_query($con,"SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id WHERE videos.categories_id=$id");
?>
<div class="container">
	<div id="recent-videos" class=" tab-pane fade active in video-grid">
					<?php
					while($row = mysqli_fetch_array($result)){
						if($i===0){
							?><div class="row-fluid"><?php
						}
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
				        <?php if($i===3){
							?></div><?php
							$i=-1;
						} ?>
					<?php $i++; } ?>
	</div>
</div>
<?php include('footer.php'); ?>
