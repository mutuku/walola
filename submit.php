<?php 
	
	$fname = $_REQUEST[ 'fname' ];
	
	$lname = $_REQUEST[ 'lname' ];
	$date = $_REQUEST[ 'date' ];
	$time = $_REQUEST[ 'time' ];
	$instructions = $_REQUEST[ 'instructions' ];
	$email = $_REQUEST[ 'email' ];
	
	$magic = $_REQUEST[ 'magic' ]; //honey pot variable. do not change
	
	//exit form if honeypot variable is filled
	if ($magic != "") {
		exit;
	} 
	
	$subject = "Reservations from ".fname. " for ". $date. " at ". $time ;
	$message = "Name :".$fname."".lname."</n>";
	$message .= "Date:".$date."</n>";
	$message .= "Time:".$time."</n>";
	$message .= "Instructions:".$instructions."</n>";
	
	$message = "Name: ".$fname." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'YOUR_MAIL', $mail_subject, $message, "From:" . $email ) ) {
		echo "Thank you <strong>$name</strong> for contacting with us.  We will get back to you soon !!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
	
 ?>