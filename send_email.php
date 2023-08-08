<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "recipient@example.com"; // Replace with the recipient's email address
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
