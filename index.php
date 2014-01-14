
<?php
include('header.php');
?>

 
<!-- HEADER --> 
  <header id="head-top">
	
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#head-top"><img src="images/logo.jpg"/></a>

          <div id="user-inks">
            <span><a href="#">Sign In</a>//</span>
            <span><a href="#">Upload</a></span>
          </div>

          <div id="social-links">
            <span class="icon facebook"><a href="#"><img src="images/facebook-icon.png"/></a></span>
            <span class="icon twitter"><a href="#"><img src="images/twitter-icon.png"/></a></span>
          </div>

          <div class="nav-collapse collapse top-spy">
            <ul class="nav" id="topnav">
              <li class="active"><a href="#head-top">Skate</a></li>
              <li><a href="#Section-2">Surf</a></li>
			  <li><a href="#Section-3">Sky</a></li>
			  <li><a href="#Section-1">Snow</a></li>
			  <li><a id="show-search" href="#"><img src="images/search-icon.png"></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div><!---end navbar-inner-->
      <div id="dropdown-search">
      	<input id="search" type="text" placeholder="Search.." >
      </div>
    </div>

    

      <div class="hero-unit">
		<div class="container">
		<div id="myCarousel" class="carousel slide">
  	<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><div class="row">
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
	</header>
<!-- / HEADER -->


<!--  SECTION-1 -->  
<section id="Section-1">
	<div class="container">
    <!-- Example row of columns -->
    <div class="row">
		<div class="span12">
			<ul id="video-grid-nav"> 
				<li><a href="#" class="active">Recent videos</a></li>
				<li><a href="#">Weeks Hottest</a></li>
				<li><a href="#">Worked</a></li>
			</ul>
		</div> 
	</div>	
	
	<div id="video-grid">

		<div class="row-fluid">
	        <div class="span4 video text-center box"> 
	        	<a href="#" class="video-overlay">
	        		<div>
	        			<h2>Video Name</h2>
	        			<span>Skate</span>
	        		</div>
	        	</a>    
	       		<img src="images/video-temp.jpg"/>    
	        </div>

	        <div class="span4 video text-center box"> 
	        	<a href="#" class="video-overlay">
	        		<div>
	        			<h2>Video Name</h2>
	        			<span>Skate</span>
	        		</div>
	        	</a>    
	       		<img src="images/video-temp.jpg"/>    
	        </div>

	        <div class="span4 video text-center box"> 
	        	<a href="#" class="video-overlay">
	        		<div>
	        			<h2>Video Name</h2>
	        			<span>Skate</span>
	        		</div>
	        	</a>    
	       		<img src="images/video-temp.jpg"/>    
	        </div>
		</div>
		<div class="row-fluid">
	        <div class="span4 video text-center box"> 
	        	<a href="#" class="video-overlay">
	        		<div>
	        			<h2>Video Name</h2>
	        			<span>Skate</span>
	        		</div>
	        	</a>    
	       		<img src="images/video-temp.jpg"/>    
	        </div>

	        <div class="span4 video text-center box"> 
	        	<a href="#" class="video-overlay">
	        		<div>
	        			<h2>Video Name</h2>
	        			<span>Skate</span>
	        		</div>
	        	</a>    
	       		<img src="images/video-temp.jpg"/>    
	        </div>

	        <div class="span4 video text-center box"> 
	        	<a href="#" class="video-overlay">
	        		<div>
	        			<h2>Video Name</h2>
	        			<span>Skate</span>
	        		</div>
	        	</a>    
	       		<img src="images/video-temp.jpg"/>    
	        </div>
	      </div>
	



		</div>
	</div>

	</div><!-- / CONTAINER-->
</section>

<!-- / SECTION-1 -->

<!-- / SECTION-3 --> 
<section id="Section-3">
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
				<p>LHNOF Flkjf fglkjflgfj </p>

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

		
<div class="row-fluid">
<div class="span7">

</div><!--/SPAN7-->

<div class="span5">
											
</div>
</div><!-- /CONTAINER-->
</section>
<!-- / SECTION-3 --> 
 
 <!-- SECTION-4 -->
<section id="Section-4">
<div class="container">
   <div class="row">
		<div class="span12 page-header text-center">	
		</div> 
	</div>	
	
  
	  
	  <div class="row-fluid">
	  
	  </div>
	</div><!-- / CONTAINER-->
</section> 
 <!-- / SECTION-4 -->
 

      


<?php include('footer.php'); ?>

