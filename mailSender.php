<?php
session_start();
//echo 'start of the script';
$username = $_GET['username'];
$password = $_GET['password'];
$body = $_GET['body'];
$subject = $_GET['subject'];
$to_address = $_GET['to_address'];


use PHPMailer\PHPmailer\PHPMailer;
use PHPMailer\PHPmailer\Exception;
require 'PHPMailer\PHPMailer\src\Exception.php';
require 'PHPMailer\PHPMailer\src\PHPMailer.php';
require 'PHPMailer\PHPMailer\src\SMTP.php';


//require 'PHPMailer/vendor/autoload.php';
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->Host = "smtp.live.com";

$mail->SMTPSecure = 'tls';
$mail->Port = 587; // or 587
$mail->SMTPAuth = true;
$mail->Username = $username;
$mail->Password = $password;

$mail->isHTML(false);
$mail->setFrom('cragzeek@hotmail.com');
$mail->addAddress($to_address);
$mail->addReplyTo($to_address);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $body;
if(!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    $_SESSION['success'] = false;

//    echo 'did we even make it here?';
} else {
     $_SESSION['success'] = true;
    //echo "Message has been sent!";
}


header('Location: index.php');
//echo 'nothing is broken yet';

?>

