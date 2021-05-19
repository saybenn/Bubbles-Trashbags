<?php
//include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//set variables
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$email_from = $visitor_email;

//Static Subject
$email_subject = "New Form Submission";

//Formatted Body
$email_body = "You have received a new message from $name. \n"."Subject: $subject \nMessage: $message \nSender Email: $visitor_email";

//Business Email
$to = "neverastain@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// mail($to, $email_subject, $email_body, $headers);

if(isset($_POST['submit'])) {
    //create instance of php mailer
    $mail = new PHPMailer();

    //set mailer to use smtp
    $mail ->isSMTP();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //define smtp host
    $mail -> Host ="smtp.gmail.com";

    //enable smtp authentication
    $mail ->SMTPAuth = "true";

    //set type of encryption ((ssl/tls))
    $mail -> SMTPSecure = 'tls';

    //set port to connect smtp
    $mail -> Port = "587";
    
    //Host's sender account
    //set gmail username
    $mail -> Username = "elijr1980@gmail.com";

    //set gmail password
    $mail -> Password = "22Cambri1232!";

    //Host receiver account
    //recipient
    $mail -> addAddress("neverastain@gmail.com");

    //set email subject
    $mail -> Subject = $email_subject;

    //email body
    $mail -> Body = $email_body;

    //set sender
    $mail->SetFrom($visitor_email);

    //send email
    if ($mail ->Send()) {
        echo 'Mail Sent';
    } else {
        echo 'Error';
    }
    //close smtp connection
    $mail ->smtpClose();
}
?>

