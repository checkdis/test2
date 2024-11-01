<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the message from the POST data
    $message = $_POST['message'];

    // Set up email details
    $to = "hallo.titty2@gmail.com";
    $subject = "User Response";
    $body = "Message: " . $message;
    $headers = "From: hallo.titty2@gmail.com";  // Replace with your email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }
} else {
    echo "Invalid request";
}
?>
