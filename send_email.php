<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "mariatu.bah46@gmail.com"; 
    $subject = "Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message! We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>