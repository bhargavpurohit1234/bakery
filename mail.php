<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication


	$mail->Username = 'bancpatel123@gmail.com';   	 // SMTP username - Insert Email Address
	$mail->Password = 'bansi123'; 					// SMTP password - Insert Email Account Password



// $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465; 

$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;                                 // TCP port to connect to  587 / 465


// $mail->SMTPDebug = 3;
$mail->setFrom('bancpatel123@gmail.com', 'bansi');
$mail->addReplyTo('bancpatel123@gmail.com', 'bansi');

$mail->addAddress('bancpatell23@gmail.com');

$mail->addAddress('bansisangani1212@gmail.com');   			// Add a recipient
//$mail->addCC('viraj_iol@yahoo.co.in');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>BANSi</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Sanskar</b></p>';
$bodyContent .= '<p>Testing</p>';

$mail->Subject = 'Email from Localhost by Sanskar';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>