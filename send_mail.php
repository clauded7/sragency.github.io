<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the recipient email address where you want to receive the form submissions
    $recipient_email = "donaldworth40@gmail.com";

    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create the email subject and body
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($recipient_email, $subject, $body, $headers)) {
        // Email sent successfully, redirect to a "thank you" page or show a success message
        echo "Thank you for contacting us!";
    } else {
        // Error occurred while sending the email, display an error message
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
