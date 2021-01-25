<?php include 'header.php'; ?>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>road transportation</h1></a>
					<div class="pull-right">
						<a href="01_home.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="06_services.html">Our services</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="08_services-details.html">Road Transportation</a>
					</div>
				</div>
			</div>

			<!-- <iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/d/embed?mid=z2qirMhgTWQA.kXIVQWqn-ONc"></iframe> -->


			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>Head Office</h4>
						<p>Everyday is a new day for us and we work really hard to
							satisfy our customers everywhere.</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>UPSC Ship Center,</strong><br> 2000 N San Fernando Rd, Los Angeles, CA 90065, United States</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+1 (202) 681-3519</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>contact@upsc-usa.com</div>
							</div>
						
						</div>
						<br><br><hr><br>
						<h4>Branch Office</h4>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>UPSC Ship Center,</strong><br> 2000 N San Fernando Rd, Los Angeles, CA 90065, United States</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+1 (202) 681-3519</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>contact@upsc-usa.com</div>
							</div>
						
						</div>
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
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
    $mail->addAddress('contact@upsc-usa.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['fname'])) {
        $mail->Subject = 'UPSC-USA Contact';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
First Name: {$_POST['fname']}
Last Name: {$_POST['lname']}
Email: {$_POST['email']}
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
  <strong>Sent!</strong> Message successfully send, we will get back to you soon.
</div>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?> 
						<h4>SEND us a message</h4>
						<p>Our customer support is always on standby to answer all your inquiries. fill the form bellow or better still chat with us on the live chat support. We are here for you.</p>
						<div id="success"></div>
						<form novalidate id="contactForm" method="post" class="reply-form form-inline">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="fname" id="user-name" placeholder="First Name" required="required">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="email" id="user-email" placeholder="Email Address" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="lname" id="user-lastname" placeholder="Last Name">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="phone" id="user-phone" placeholder="Phone No.">
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="subject" id="subject" placeholder="Subject">
							</div>
							<div class="form-elem default-inp">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<div class="form-elem">
								<button type="submit" class="btn btn-success btn-default">send message</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php include 'footer.php'; ?>