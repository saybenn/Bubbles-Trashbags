<?php
//include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// //set variables
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $message = $_POST['message'];

// $email_from = 'elliott.chambers.jr@gmail.com';
// $email_subject = "New Form Submission";
// $email_body = "You have received a new message from $name. \n"."Here is the message:\n $message".

// $to = "neverastain@gmail.com";
// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";

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

    //set gmail username
    $mail -> Username = "elijr1980@gmail.com";

    //set gmail password
    $mail -> Password = "22Cambri1232!";

    //set sender
    $mail->SetFrom('elijr1980@gmail.com');

    //set email subject
    $mail -> Subject = '*You Got Mail*';

    //email body
    $mail -> Body = 'from:' . $POST_['name'] . '@' .$POST_['email'] . 'saying' . $POST_['message'] . 'about' . $POST_['subject'];

    //recipient
    $mail -> addAddress("neverastain@gmail.com");

    //send email
    if ($mail ->Send()) {
            header("Location: index.php?mand");

    } else {
            header("Location: index.php?mailsend");
    }
    //close smtp connection
    $mail ->smtpClose();
}
?>

