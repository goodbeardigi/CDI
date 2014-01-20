
<?php
include('header.php');
?>

<section id="section-1">
	<div class="container">
	<!--	<div class="row">
			<div class="span12 page-header text-center">
				<h3>About Us</h3>
				<p class="lead">blah </p>
			</div> 
		</div>	-->
 
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

				<a id="forgotdetails" href="#">Forgotting login details</a>

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

