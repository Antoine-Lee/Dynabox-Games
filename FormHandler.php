<?php
	$name = $_POST['name']; 
	$visiter_email = $_POST['email']; 
	$message = $_POST['message']; 

	$email_from = 'antoinekllee@gmail.com'; 

	$email_subject = "New Form Submission"; 

	$email_body = "Username: $name.\n"."User Email: $visiter_email.\n"."User Message: $message.\n"; 

	$to = 'antoinekllee@gmail.com'; 

	$headers = "From $email_from \r\n"; 

	$headers . = "Reply-To: $visiter_email \r\n"; 

	mail($to, $email_subject, $email_body, $headers); 

	header("Location: home.html")
?>