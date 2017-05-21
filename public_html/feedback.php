<?php

	sleep(2);
	
$name = trim(stripslashes(htmlspecialchars($_POST['name'])));
$email = trim(stripslashes(htmlspecialchars($_POST['email'])));
$comment = trim(stripslashes(htmlspecialchars($_POST['comment'])));
$number = trim(stripslashes(htmlspecialchars($_POST['number'])));
$website = trim(stripslashes(htmlspecialchars($_POST['website'])));
	$honeypot = $_POST['honeypot'];
	$humancheck = $_POST['humancheck'];
	
	if ($honeypot == 'http://' && empty($humancheck)) {
		
		//Validate data and return success or error message
		$error_message = '';	
		$reg_exp = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,4}$/";
		
		if (!preg_match($reg_exp, $email)) {
				    
					$error_message .= "<p>A valid email address is required.</p>";			   
		}
		
		if (empty($name)) {
				   
				    $error_message .= "<p>Please provide your name.</p>";			   
		}	
				
		if (empty($comment)) {
					
					$error_message .= "<p>A message is required.</p>";
		}
		
		if (!empty($error_message)) {
					$return['error'] = true;
					$return['msg'] = "<h3>Oops! The request was successful but your form is not filled out correctly.</h3>".$error_message;					
					echo json_encode($return);
					exit();
		} else {
			
			//send to an email
			
			$to = 'info@neri-designs.com';
			$from = 'neridesi@just39.justhost.com';
			$headers = 'MIME-Version: 1.0' . '\n';
			$headers .= 'From: $from' . '\n';
			$subject = 'Contact Form Submission';
			$body = 'Name: ' .$name . "\n";
			$body .= 'Email: ' .$email . "\n";
			$body .= 'Message: ' .$comment . "\n";
			$body .= 'Number: ' .$number . "\n";
			$body .= 'Directed From: ' .$website . "\n";
			
			
			//send email and return a message to the user
			
			if(mail($to, $subject, $body, $headers)) {
				
					$return['error'] = false;
					$return['msg'] = "<p>Thanks for your message, " .$name ." I'll be in contact soon.</p>"; 
					echo json_encode($return);
				
			} else {
				
					$return['error'] = true;
					$return['msg'] = "<h3>Oops! There was a problem sending your email. Please try again.</h3>";	
					echo json_encode($return);
	
			}
							  
		  }		
} else {
	
	$return['error'] = true;
	$return['msg'] = "<h3>Oops! There was a problem with your submission. Please try again.</h3>";	
	echo json_encode($return);
}
	
?> 