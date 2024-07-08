<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com";
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo '<p class="form-response" style="color: lightgreen;">Thank you for your message. We will get back to you soon!</p>';
        header('Location: support.html#success');
        exit;
    } else {
        echo '<p class="form-response" style="color: red;">There was an error sending your message. Please try again later.</p>';
        header('Location: support.html#error');
        exit;
    }
}
?>