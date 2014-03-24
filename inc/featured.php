<?php
include('connect.php');

//$days = $_POST['days'];
$videos = array();
$p=0;

$result = mysqli_query($con,"SELECT * FROM videos WHERE featured = 1");

while($row = mysqli_fetch_array($result)){
	if($p==0){
		?><div class="active item"><?php
	} else {
		?><div class="item"><?php
	}
	?>
    	<div class="row">
			<div class="span12 text-left">
				<a href="/video.php?id=<?php echo $row['id'] ?>">
					<img src="images/<?php echo $row['image'] ?>" alt="" />
					<div class="featured-video-text">
						<div class="name"><h2><?php echo $row['name'];?></h2></div>
						<div class="featured-description"><?php echo $row['description'];?></div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<?
	$p++;
}
//echo json_encode($videos);
?>