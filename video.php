<?php

include 'inc/connect.php';
include('header.php');

?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit" id="video-unit">
		<div class="container">
			<div class="row">
				<video class="span12" style="background:#000" id="video" preload="auto" autobuffer="" controls="" poster="">
				  	<source src="movie.mp4" type="video/mp4">
				  	<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
</div>

<section id="about-video">
	<div class="container">
    	<div class="row">
				<div class="span7">
					<ul id="video-title">
						<li><h3>Title</h3></li>
						<li><h4 id="author">Author</h4></li>
					</ul>
						<div style="clear: both;"></div>

					<h5>Date</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet ultricies metus, quis mollis auLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet ultricies metus, quis mollis augue. Quisque a fermentum diam. Quisque a risus vel lore</p>
				</div>
				<div id="social-share" class="span4">
					<img src="images/twitter-share.png">
					<img src="images/facebook-share.png">
					<img src="images/pinterest-share.png">
				</div>
		</div>
	</div>
</section>

<section id="related-videos">
	<div class="container">
    	<div class="row">
			<div class="span12">
				RELATED VIDEOS //
			</div>	
		</div>
	</div>
</section>

<section id="comments-hottest">
	<div class="container">
    	<div class="row">
			<div class="span6">
				COMMENTS //
			</div>
			<div class="span5">
				THIS WEEKS HOTTEST //
			<div>	
		</div>
	</div>
</section>

<?php include('footer.php'); ?>
