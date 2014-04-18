<?php

include('inc/connect.php');
include('header.php');
include('inc/timeago.php');

$id=$_GET["id"];
$i=0;
$result = mysqli_query($con,"SELECT videos.id, videos.name, videos.description, videos.user_id, videos.categories_id, videos.date_added, videos.url, videos.length, videos.image, categories.category FROM videos INNER JOIN categories ON categories.id=videos.categories_id WHERE videos.categories_id=$id ORDER BY id DESC LIMIT 12");
?>
<div class="container">
	<h2 id="searchterm">
		<?php
		if($id == 0){
			echo "Skate";
		} elseif ($id == 1){
			echo "Surf";
		} elseif ($id == 2){
			echo "Sky";
		} elseif ($id == 3){
			echo "Snow";
		}
		?>
	</h2>
	<div id="cat-videos" class=" tab-pane fade active in video-grid">
		<div class="row">
					<?php
					while($row = mysqli_fetch_array($result)){
						if($i===0){
							?><!--<div class="row-fluid">--><?php
						}
						?>
				        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 video text-center box"> 
				        	<a href="/video.php?id=<?php echo $row['id'];?>" class="video-overlay">
				        		<div>
				        			<h2><?php echo $row['name'];?></h2>
				        			<span><?php echo $row['category'];?></span>
				        		</div>
				        	</a>    
				       		<img src="videos/thumbnails/<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>" />
				       		<div class="overlay">
		                      <span class="span-title"><?php echo $row['name'] ?></span>
		                      <span class="span-length"><?php echo $row['length'] ?></span>
		                    </div>
				        </div>
				        <?php if($i===2){
							?><!--</div>--><?php
							$i=-1;
						} ?>
					<?php $i++; } ?>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
 
    $('#cat-videos').scrollPagination({
 		
 		cat_id 	: "<?php echo $id ?>",
        nop     : 3, // The number of posts per scroll to be loaded
        offset  : 12, // Initial offset, begins at 0 in this case
        error   : 'No More Posts!', // When the user reaches the end this is the message that is
                                    // displayed. You can change this if you want.
        delay   : 500, // When you scroll down the posts will load after a delayed amount of time.
                       // This is mainly for usability concerns. You can alter this as you see fit
        scroll  : true // The main bit, if set to false posts will not load as the user scrolls. 
                       // but will still load if the user clicks.
         
    });
     
});
</script>
<?php include('footer.php'); ?>
