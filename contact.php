<?php
	define("TITLE", "Contact Me");
	
	include('includes/header.php');
	
?>

	<div id="contact">
		
		
		<h1>Contact me!</h1>
		

		<?php
	
		// Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
		
		
		if (isset($_POST['contact_submit'])) {
			
			// Data to variables
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$msg	= $_POST['message'];
		
			// Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)) {
				
				die(); 
				
			}
			
			if (!$name || !$email || !$msg) {
				echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
				exit;
			}
			
			// Add email to a variable
			$to	= "arteademaj@gmail.com";
			
			//subject
			$subject = "$name sent a message via your contact form";
			
			//the message
			$message = "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";
			
			$message = wordwrap($message, 72);
		
		
			
			// Send the email
			mail($to, $subject, $message);
		?>
		
		<!-- success message after email has sent -->
		<h5>Thanks for contacting me</h5>
		
		<p><a href="index.php" class="button block">&laquo; Go to Home Page</a></p>
		
		<?php
			} else {
		?>

		<form method="post" action="" id="contact-form">
			<label for="name">Your name</label>
			<input type="text" id="name" name="name">
			
			<label for="email">Your email</label>
			<input type="email" id="email" name="email">
			
			<label for="message">Your message</label>
			<textarea id="message" name="message"></textarea>
			
			
			
			<input type="submit" class="button next" name="contact_submit" value="Submit">
		</form>
		
		<?php
			}
		?>
	
	</div>
			
<?php include('includes/footer.php'); ?>