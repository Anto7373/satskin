<?php
session_start();

require 'mailer/PHPMailerAutoload.php';

if(isset($_POST["submit"]))

 {

 //if($_SESSION['capcha_key'] == $_POST['capcha'])
 //{
 
$subject1 = "New Enquiry From Website - Satinskin";



	$message1 = "<b>Enquiry details as follow:</b><br><br>



	



	<b> Name : </b> $_POST[name]<br><br>



 	<b>Email : </b>$_POST[email]<br><br>

	<b>Phone : </b>$_POST[phone]<br><br>
	
	<b>City : </b>$_POST[city]<br><br>";
	
    if(isset($_POST[app_type])) {
	$message1 .= "<b>Appointment type : </b>$_POST[app_type]<br><br>";
    }
	
    $message1 .= "<b>Message :</b> $_POST[message]<br><br>



	<br><br>";



	



	$subject2 = "Acknowledgement from Satinskin Laser Clinics Pvt. Ltd. ";



	$message2 = "<em>Dear  $_POST[name]</em><br><br>

     

<br />



<br />

We Thank You for visiting our website www.satinskin.in and registering with us.</em><br />



<br />



This is an auto-response from Satinskin Laser Clinics Pvt. Ltd. help desk. It will be our best endeavor to revert to you in the earliest possible time.</em>



<br />



<br />



In case of further queries, please send an email to  ilovemyskin@satinskin.in</em>



<br />



<br />



Assuring you of our best services.</em>



<br />



<br />



Many Thanks and Best Regards,</em><br />



<strong><em>Satinskin Laser Clinics Pvt. Ltd. </em></strong>



<br />



<br />



</em>";




$mail = new PHPMailer; 
/*
$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                             // Enable SMTP authentication
$mail->Username = 'nileshcool@gmail.com';           // SMTP username
$mail->Password = 'password';                       // SMTP password
$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  */                   


 //Set who the message is to be sent from
$mail->setFrom('ilovemyskin@satinskin.in','Satinskin Laser Clinics Pvt. Ltd.');
$mail->addAddress('ilovemyskin@satinskin.in'); // To Address 
$mail->addAddress('vignesh@satinskin.in'); // To Address
$mail->addBCC('web.g3groupe@gmail.com');
// $mail->addCC('support@opendesigns.in');
// $mail->addCC('prem@opendesignsin.com');
//$mail->addCC('vknvkn@kfventures.in');
//Set the subject line
$mail->Subject = $subject1;
//Read an HTML message body from an external file, convert referenced images to embedded,
//Replace the plain text body with one created manually
$mail->Body = $message1;
$mail->IsHTML(true);
$mail->send();
 
 
 /*acknowledgement Mail*/
 
 $mail1 = new PHPMailer; 
/*
$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                             // Enable SMTP authentication
$mail->Username = 'nileshcool@gmail.com';           // SMTP username
$mail->Password = 'password';                       // SMTP password
$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  */                   


 //Set who the message is to be sent from
$mail1->setFrom('ilovemyskin@satinskin.in','Satinskin Laser Clinics Pvt. Ltd. ');
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail1->addAddress($_POST['email']); // To Address 
//$mail1->addAddress($to);
//  $mail->AddCC($cc);
//Set the subject line
$mail1->Subject = $subject2;
//Read an HTML message body from an external file, convert referenced images to embedded,
//Replace the plain text body with one created manually
$mail1->Body = $message2;
$mail1->IsHTML(true);
$mail1->send();
	header("Location:thank-you.html");

exit;

}
 
?>