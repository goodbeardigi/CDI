<?php
//include('inc/connect.php');
include('header.php');
?>
	
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="span12">		
				<!-- Form -->
				<form id="contact-form" action="/" method="post">
					<h3>Get in touch</h3>
					<h4>Fill in the form below, and we'll get back to you within 24 hours.</h4>
					<div>
						<label>
							<span>Name: (required)</span>
							<input placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<span>Email: (required)</span>
							<input placeholder="Please enter your email address" type="email" tabindex="2" required>
						</label>
					</div>
					<div>
						<label>
							<span>Telephone: (required)</span>
							<input placeholder="Please enter your number" type="tel" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>
							<span>Message: (required)</span>
							<textarea placeholder="Include all the details you can" tabindex="5" required></textarea>
						</label>
					</div>
					<div>
						<button name="submit" type="submit" id="contact-submit">Send Email</button>
					</div>
				</form>
				<!-- /Form -->
			</div>
		</div>
	</div>
</section>

	<script src
	="js/contact.js"></script>
	
<?php include('footer.php'); ?>