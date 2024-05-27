<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Here, you can set up email sending functionality
    // For example, using PHP's mail() function or a library like PHPMailer

    $to = 'stijnclara@hotmail.com';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $email_subject = "Contact Form Submission: $subject";
    $email_body = "You have received a new message from $name.\n\n".
        "Here are the details:\n".
        "Name: $name\n".
        "Email: $email\n".
        "Subject: $subject\n".
        "Message:\n$message";

    // You can use mail() function to send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>