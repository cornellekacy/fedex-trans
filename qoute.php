<?php include 'header.php'; ?>
</header>

<div class="bg-image page-title">
	<div class="container-fluid">
		<a href="#"><h1>GET A FREE QUOTE</h1></a>
		<div class="pull-right">
			<a href="01_home.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="03_about.html">About Us</a>
		</div>
	</div>
</div>    

<div class="darken-block inner-offset">
	<div class="container-fluid">


		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md6">
						<div class="quote-form">
							<div class="hgroup">
								<h1 class="color-1">GET A FREE QUOTE</h1>
								<h2>we always use best & fastest fleets</h2>
							</div>
							<?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
	date_default_timezone_set('Etc/UTC');
	require 'autoload.php';
    //Create a new PHPMailer instance
	$mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
	$mail->isSMTP();
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
	$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
	$mail->setFrom('from@example.com', 'Site Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
	$mail->addAddress('cornellekacy4@gmail.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
	if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
		$mail->Subject = 'Fedexs USA Contact';
        //Keep it simple - don't use HTML
		$mail->isHTML(false);
        //Build a simple message body
		$mail->Body = <<<EOT
		Full Name: {$_POST['name']}
		Email: {$_POST['email']}
		Destination From: {$_POST['from']}
		Destination To: {$_POST['to']}
		Phone Number: {$_POST['phone']}
		Subject: {$_POST['subject']}
		Message: {$_POST['message']}
		EOT;
        //Send the message, check for errors
		if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
			$msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
		} else {
			echo "<div class='alert alert-success'>
			<strong>Sent!</strong> Qoute successfully Created, we will get back to you soon.
			</div>";
		}
	} else {
		$msg = 'Invalid email address, message ignored.';
	}
}
?> 
							<div class="row">
								<div id="success"></div>
								<form novalidate method="post" id="contactForm" class="reply-form">
									<div class="col-xs-6">
										<input type="text" class="form-control" name="name" id="user-name" placeholder="FULL Name">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="email" id="user-email" placeholder="Email Address">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="from" id="user-lastname" placeholder="Destination From">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="to" placeholder="Destination To">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="subject" id="user-subject" placeholder="Subject">
										<input type="text" class="form-control" name="phone" id="user-phone" placeholder="PHONE No.">
									</div>
									<div class="col-xs-6">
										<textarea  id="user-message" name="message" class="form-control" placeholder="COMMENTS"></textarea>
									</div>
									<div class="col-xs-6 col-xs-offset-6">
										<button type="submit" class="btn btn-danger">SEND ME QUOTE</button>
									</div>
								</form>
							</div>
						</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>