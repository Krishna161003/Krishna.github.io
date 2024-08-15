<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receiver's email address
    $to = "krishnarajks2322@gmail.com"; // Replace with the actual email address

    // Sender's details
    $senderEmail = $_POST["senderEmail"];
    $senderName = $_POST["senderName"];

    // Email details
    $message = $_POST["message"];

    // Basic validation
    if (empty($senderEmail) || empty($senderName) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Validate sender's email using a regular expression
    if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid sender's email address.";
        exit;
    }

    // Email headers
    $headers = "From: $senderName <$senderEmail>\r\n";
    $headers .= "Reply-To: $senderEmail\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Send email
    $mailResult = mail($to, '', $message, $headers); // Empty subject

    if ($mailResult) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
