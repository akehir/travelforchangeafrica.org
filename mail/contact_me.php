<?php
// check if fields passed are empty
if( empty($_POST['name'])  		||
    empty($_POST['email']) 		||
    empty($_POST['time']) 		||
    empty($_POST['people']) 	||
    empty($_POST['message'])	||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
	 echo "No arguments Provided!";
	 return false;
    }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$time = $_POST['time'];
$people = $_POST['people'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@travelforchangeafrica.org';//'info@travelforchangeafrica.org'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "Travel For Change Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nDates of Stay: $time\n\nNumber of Peoples: $people\n\nMessage:\n$message";
$headers = "From: noreply@travelforchangeafrica.org\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;
?>