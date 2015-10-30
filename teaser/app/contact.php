<?php

require 'vendor/autoload.php';

$mailContact = new PHPMailer;

// Email to Contact
$mailContact->From = 'Wendy.Chang@fandtgroup.com';
$mailContact->FromName = 'Flushing Commons';
$mailContact->addAddress($_POST['email']);
$mailContact->addReplyTo('Wendy.Chang@fandtgroup.com', 'Flushing Commons');
$mailContact->addBCC('lgrassini@bridgerconway.com');
$mailContact->isHTML(true);

$mailContact->Subject = 'Thank You';
$mailContact->Body    = 'Thank you for your contacting to Flushing Commons. We will be back to you soon.<br/><br/>'
				. 'Flushing Commons.<br/><br/>'
				. '<img src="http://dev.bridgerconwaydigital.com/flushing_commons/images/logoMail.png"/>';
$mailContact->AltBody = 'Thank for your subscription to Global Music Network 1.';

if(!$mailContact->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mailContact->ErrorInfo;
} else {

	$mailNotification = new PHPMailer;
	
	// Notification to FlushingCommons
	$mailNotification->From = $_POST['email'];
	$mailNotification->FromName = $_POST['name'] . ' ' . $_POST['lastname'];
	$mailNotification->addAddress('Wendy.Chang@fandtgroup.com');
	$mailNotification->addReplyTo('Wendy.Chang@fandtgroup.com', 'Flushing Commons');
	$mailNotification->addBCC('lgrassini@bridgerconway.com');
	$mailNotification->isHTML(true);

	$mailNotification->Subject = 'New Information request from website';
	$mailNotification->Body    = 'New Information request from website<br/><br/>'
					. '<b>First Name:</b> ' . $_POST['firstName'] . '<br/><br/>'
					. 'Middle Name: ' . $_POST['middleName'] . '<br/><br/>'
					. 'Last Name: ' . $_POST['lastName'] . '<br/><br/>'
					. 'Address: ' . $_POST['address'] . '<br/><br/>'
					. 'City: ' . $_POST['city'] . '<br/><br/>'
					. 'State: ' . $_POST['state'] . '<br/><br/>'
					. 'ZIP: ' . $_POST['zip_code'] . '<br/><br/>'
					. 'Email: ' . $_POST['email'] . '<br/><br/>'
					. 'Phone: ' . $_POST['phone'] . '<br/><br/>'
					. 'Interest: ' . $_POST['interesting'] . '<br/><br/>'
					. 'Type: ' . $_POST['types'] . '<br/><br/>'
					. 'Square footage: ' . $_POST['pricing'] . '<br/><br/>'
					. 'Are you represented by a broker?: ' . $_POST['broker'] . '<br/><br/>'
					. 'How did you hear about Flushing Commons?: ' . $_POST['how_hear'] . '<br/><br/>'
					. 'Other: ' . $_POST['comment_other'] . '<br/><br/>'
					. 'Comment: ' . $_POST['comments'] . '<br/><br/>'
					. '<img src="http://dev.bridgerconwaydigital.com/flushing_commons/images/logoMail.png"/>';
	$mailNotification->AltBody = 'New Flushing Commons information request. Please contact: ' . $_POST['email'];
	
	if(!$mailNotification->send())
		echo 'Mailer Error: ' . $mailNotification->ErrorInfo;
}

?>