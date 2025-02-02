<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "abubaten.n@gmail.com";  // Replace with your email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $full_name\n";
    $body .= "Email: $email\n";
    $body .= "Mobile: $mobile\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message\n";

    if(mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request!";
}
?>
