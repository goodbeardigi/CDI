<?php
include('inc/connect.php');
include('header.php');
?>
<div class="container">
	<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
  <!-- Carousel items -->
	<div class="carousel-inner">
		<div class="active item">
			<div class="row">
				<div class="span12 text-left">
					<img src="images/surf-girl.jpg" alt="" />
				</div>
			</div>
		</div>
	</div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
	</div>		

	<div class="content">
			
		<table style=" text-align:center;padding-left:10px; padding-right:10px; padding-bottom:10px">
				<tr>
					<td style="width:100%; color:#0099FF; font-size: 100px;">
					<h1><b>ABOUT CDI SPORTS</b></h1>
					</td>
				</tr>
			
				<tr>
					<td style="width:100%; padding:10px;">
					<h3>
					The Group consists of Alex Ackland, James Cobbett, Tom Marples, Luke O'Brien, Hulya Roxana and Madalina Timofte.<br> We are all Computing and Digital Image students giving the name CDI Sports.
					</h3>
					</td>
				</tr>
		</table>
			
		<table style="text-align:justify;">
				<tr>
					<td style="width:50%; padding-left:15px; border-top: 3px solid blue; ">
						<h2 style="color:#0099FF;">Lorem Ipsum</h2>
					</td>
					<td style="width:50%; padding-left:15px; border-top: 3px solid blue; ">
						<h2 style="color:#0099FF;">Lorem Ipsum</h2>
					</td>
				</tr>
				<tr>
					<td style="width:50%;padding15px;">
					The site will host a variety of videos from different sports, all hosted internally. CDI Sports aims to combine great videos with a clean, modern looking interface, which provides a very user friendly experience.
			
					</td>				
					<td style ="width:50%; padding:15px;">
					Videos will have the ability to be rated, commented on, and shared on social media sites via the built in links. These features will be accessible to people who have signed up and created an account.
					</td>
				</tr>
		</table>	
	</div>
</div>
<?php include('footer.php'); ?>