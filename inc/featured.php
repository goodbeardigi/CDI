<?php
include('connect.php');

//$days = $_POST['days'];
$videos = array();
$p=0;

$result = mysqli_query($con,"SELECT * FROM videos WHERE featured = 1");

while($row = mysqli_fetch_array($result)){
	if($p=0){
		?><div class="active item"><?php
	} else {
		?><div class="item"><?php
	}
	?>
    	<div class="row">
			<div class="span12 text-left">
				<a href="/video.php?id=<?php echo $row['id'] ?>">
					<img src="images/banner-temp.jpg" alt="" />
					<div class="name"><?php echo $row['name'];?></div>
					<div class="description"><?php echo $row['description'];?></div>
				</a>
			</div>
		</div>
	<?
	$p++;
}
//echo json_encode($videos);
?>