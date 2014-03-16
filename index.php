<?php
include('header.php');
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
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
				<img src="images/banner-temp.jpg" alt="" />
			</div>
		</div>
	</div>
    <div class="item">
    	<div class="row">
			<div class="span12 text-left">
				<img src="images/banner-temp.jpg" alt="" />
			</div>
		</div>
	</div>
       <div class="item">
    	<div class="row">
			<div class="span12 text-left">
				<img src="images/banner-temp.jpg" alt="" />
			</div>
		</div>
	</div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
</div>
			
		</div>
      </div>

<section id="Section-1">
	<div class="container">
    <div class="row">
		<div class="span12">
			<ul  id="myTab"  class="video-grid-nav nav nav-tabs"> 
				<li><a href="#recent-videos" class="active" data-toggle="tab">Recent videos</a></li>
				<li><a href="#weeks-hottest" data-toggle="tab">Weeks Hottest</a></li>
				<li><a href="#months-hottest" data-toggle="tab">Months Hottest</a></li>
			</ul>
		</div> 
	</div>	
	<div id="myTabContent" class="tab-content">

		<!-- recent videos tab -->
		<div id="recent-videos" class=" tab-pane fade active in video-grid">
			<script type="text/javascript">$( document ).ready(function() {recentvideos();});</script>	
		</div> <!-- end tab -->
		
		<!-- weeks hottest videos tab -->

		<div id="weeks-hottest" class="tab-pane fade video-grid">
			<script type="text/javascript">$( document ).ready(function() {hottestvideos(7);});</script>	
		</div>
		

		<!-- months hottest videos tab -->

		<div id="months-hottest" class="tab-pane fade video-grid">
			<script type="text/javascript">$( document ).ready(function() {hottestvideos(28);});</script>	
		</div>
		</div>
	</div><!-- / CONTAINER-->
</section>

<!-- / SECTION-1 -->

<!-- / SECTION-3 --> 
<!-- <section id="Section-3">
	<div class="container">
		<div class="row">
			<div class="span12 page-header text-center">
				<h3>About Us</h3>
				<p class="lead">blah </p>
			</div> 
		</div>	
 
		<div id="main-form" class="text-center">

			<h2> Login with email or sign up with Facebook </h2>

			<div id="login-form-container">
				<p>Some text</p>

			     <form action="#" id="login-form" method="post" novalidate="">			           
		               <input type="email" name="email" id="email-input" placeholder="info@test.com" required="required">
		               <input type="password" name="password" id="password-input" placeholder="password" required="required">
		               <input id="login-user" class="button" type="submit" value="Submit">
			     </form>
			 </div>
			 <div class="clear"></div>
		<hr>

				<span class="separator"><p>Or</p></span>

				<input id="login-user-fb" class="button" type="submit" value="Connect with Facebook">

				<p>Forgotting login details</p>

				<div id="create-account">
					<h3> Create an account</h3>
					<input id="sign-up"  class="button" type="submit" value="Sign Up"
				</div>
			</div>
		</div>											
</div><!-- /CONTAINER-->
</section> 
<!-- / SECTION-3 --> 
  

      


<?php include('footer.php'); ?>

