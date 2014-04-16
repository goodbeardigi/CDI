<?php
//include('inc/connect.php');
include('header.php');
?>
<!-- Login Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        	<div id="main-form" class="text-center">

			<h2>Login to upload a video</h2>

			<div id="login-form-container">

			     <form id="vlogin-form" method="post" novalidate="" action="">			           
		               <input type="text" name="username" id="username" placeholder="info@test.com" required="required">
		               <input type="password" name="password" id="password" placeholder="password" required="required">
		                <div class="error" id="vfailure" style="display: none;"></div>
		               <a href="#" onclick="loginvideo()" class="button-form"><div class="button" id="login">Login</div></a>
			     </form>
			 </div>
			 <div class="clear"></div>
				<span class="separator"><p>Or</p></span>

				<a href="#" onclick="fblogin()"><input id="login-user-fb" class="button" type="submit" value="Connect with Facebook"></a>
				<a href="account.php"><input id="login-user-fb" class="button" type="submit" value="Register an accoount"></a>

				<a id="forgotdetails" href="#">Forgotten login details</a>
			</div>
      </div>
    </div>
  </div>
</div>

<?php
if(!isset($_SESSION['username'])){
	?>
	<script>$('#loginModal').modal('show');</script>
	<?php
}
?>

<!-- Main hero unit for a primary marketing message or call to action -->
<section id="upload">
	<div class="container" style="padding-top: 40px !important";>
    	<div class="row">
		
    		<div id="dropbox" class="span12">
				<span class="message">Drop video files here to upload...</span>
			</div>
			<div class="span12">
				<div id="container">
					<form class="upload-form" name="upload-form" action="html_form_action.asp" method="post">
						<input type="text" class="upload-input" placeholder="Name" name="name"><br />
						<textarea name="description" style="margin-bottom: 10px" class="upload-input" placeholder="Enter description here..." form="upload-form"></textarea><br />
						<input type="text" class="upload-input" placeholder="Categories" name="categories"><br />
						<input type="hidden" name="url" value="" id="url">
						<input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>" id="id">
						<input id="uploadsubmit" style="width: 100%" class="loginButton" type="submit" value="Submit" disabled="disabled">
						<!--<br><input type="submit" id="uploadsubmit" class="button" value="Submit" disabled="disabled">-->
					</form>
				</div>
			</div>
		</div>		
	</div>
</section>

<script type="text/javascript">
$( document ).ready(function() {
  //var form = document.getElementById('upload-form');
  // if (form.attachEvent) {
  //     form.attachEvent("submit", processUploadForm);
  // } else {
      //form.addEventListener("submit", processUploadForm);
  //}
});
</script>

<?php include('footer.php'); ?>
