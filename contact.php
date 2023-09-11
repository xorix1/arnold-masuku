<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Add your email address where you want to receive messages
    $recipient_email = "arnold.masukux@gmail.com";

    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Send the email
    $headers = "From: $email";

    if (mail($recipient_email, $email_subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
