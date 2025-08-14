<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Change these values to your email address and desired subject
    $to = "yuvrajgupta1909631@.com";
    $email_subject = "New message: $subject";
    $email_body = "You have received a new message from $name ($email):\n\n$message";

    // Mail headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Sending email
    mail($to, $email_subject, $email_body, $headers);

    // Redirect after successful submission (optional)
    header("Location: thank_you.html");
    exit;
}
?>
