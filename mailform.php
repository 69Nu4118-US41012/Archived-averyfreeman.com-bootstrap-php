<?php  


	ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "averyfreeman@gmail.com");
 
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$header = 'Averyfreeman.com Contact Form';
		$to = 'averyfreeman@gmail.com';
		$subject = 'Form mailer from averyfreeman.com';

		$body = "From: $name\n+-----------+\n Email: $email\n+-----------+\n Message:\n+-----------+\n $message";
				if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			if (mail ($to, $subject, $body, $header)) {
				$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
			}
		}
}
    $page_title = "Contact Avery";
    $section = "contact";

    include ('includes/header.php');
?>
 <div class="container">
    <div class="jumbotron">
        
        <img class="img-circle img-responsive center-block" src="images/email-banner.png" />
        <p>
            <h2 class="text-center text-uppercase">
                Contact me 
            </h2>
        </p>
    </div>
	<div class="form-group">
		<div class="col-sm-12">
			<!--<div class="alert alert-warning alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><strong>ignore</strong></button>
		        <strong>Hello!</strong> Thank you for deciding to contact me, I'm looking forward to helping you!
		    	<p> <a href="index.html" class="alert-link">Return to home page</a></p>
			</div>-->
			<form class="form-horizontal" role="form" method="post" action="mailform.php">
				<div class="panel panel-default">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label text-left">Name</label>
						<div class="panel-body col-sm-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="panel-body col-sm-9">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="panel-body col-sm-9">
							<textarea class="form-control" rows="4" name="message"></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">What is 2 + 3 = ?</label>
						<div class="panel-body col-sm-9">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" value="<?php echo htmlspecialchars($_POST['human']); ?>">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-md-offset-2">
						<input id="submit" name="submit" type="submit" value="Send" class="btn-info btn-lg">
					</div>
				</div>
				<?php echo $result; ?>
			</form>
		</div>
	</div>
</div>	
<?php include "includes/footer.php" ?>