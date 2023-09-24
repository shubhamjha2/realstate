<?php
$to = 'jha,shubham.9550@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$subject = 'You Have a New Subscriber!';

$body = "Name: $name\n\n";
$body .= "Email: $email\n\n";
$body .= "Phone no.: $phone\n";

$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (mail($to, $subject, $body, $headers)) {
        echo '<span id="valid">Thank you for your subscription! We will notice you as soon as possible</span>';
    } else {
        echo '<span id="invalid">Something went wrong while sending the email. Please try again later.</span>';
    }
} else {
    echo '<span id="invalid">Invalid email address. Please enter a valid email address and try again.</span>';
}
?>
