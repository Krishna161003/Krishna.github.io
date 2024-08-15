<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $headers = "From: webmaster@example.com"; // Replace with a valid email address

    $mailResult = mail($to, $subject, $message, $headers);

    if ($mailResult) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
