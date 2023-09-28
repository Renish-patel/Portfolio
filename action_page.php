<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "renishavaiya@gmail.com"; // Replace with the email address where you want to receive messages
    $subject = $_POST["Subject"];
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    // Create the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    // Compose the email message
    $mail_body = "Name: $name<br>";
    $mail_body .= "Email: $email<br><br>";
    $mail_body .= "Message:<br>$message";

    // Send the email
    if (mail($recipient_email, $subject, $mail_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again later.";
    }
}
?>
