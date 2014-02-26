
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

			     <form id="login-form" method="post" novalidate="" action="includes/login.inc.php">			           
		               <input type="text" name="username" id="username" placeholder="info@test.com" required="required">
		               <input type="password" name="password" id="password" placeholder="password" required="required">
		               <input id="submit" class="button" type="submit" value="Login">
			     </form>
			 </div>
			 <div class="clear"></div>
		<hr>

				<span class="separator"><p>Or</p></span>

				<input id="login-user-fb" class="button" type="submit" value="Connect with Facebook">

				<a id="forgotdetails" href="#">Forgotten login details</a>

				<div id="create-account">
					<h3> Create an account</h3>
					<form id="form1" name="form1" method="post" action="insert.php"> 
					<input type="text" name="name" id="name" placeholder="info@test.com" required="required"><br>
		            <input type="password" name="password" id="password" placeholder="password" required="required"><br>
					<input id="submit"  class="button" type="submit" value="Sign-up">
					</form>
				</div>
			</div>
		</div>											
</div><!-- /CONTAINER-->
</section>
<!-- / SECTION-3 --> 
  

      


<?php include('footer.php'); ?>

