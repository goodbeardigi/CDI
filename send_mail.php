<?php
$webmaster_email = "cam00766@myport.ac.uk";

$feedback_page = "contact-us.php";
$error_page = "contact-us.php";


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$telephone_no = $_REQUEST['telephone'];
$message = $_REQUEST['message'];


/*
check for email injection.
check for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array (
		'(\n+)',
		'(\r+)',
		'(\t+)',
		'(%0A+)',
		'(%0D+)',
		'(%08+)',
		'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if (preg_match($inject, $str)) {
		return true;
	} else {
		return false;
	}
}

// Validation - script access directly from user
if (!isset ($_REQUEST['email_address'])) {
	header("Location: $error_page");
}
// Any empty fields
if (empty ($name) || empty ($email) || empty ($telephone_no) || empty ($message)) {
	header("Location: $error_page");
}

		//mail to xtv
	date_default_timezone_set('Europe/London');
	$now = date('l F dS, Y, H:i a');
	$to = "$webmaster_email";
	$subject2 = "XTV website contact form message";
	$headers = "From: Xtv@contact.com";
	$message = "
	The following message has been submitted from the XTV website:

		Message submitted: $now
	
		Name: $name 
		
		Email: $email
		
		Telephone: $telephone_no
			
		Message: $message";

	mail($to, $subject2, $message, $headers);
 //End of mail to user 

print '<script type="text/javascript">'; 
print 'alert("Message Submited!")'; 
print '</script>'; 

header("Location: $feedback_page");

?>