<?php
// Captive Portal Login Script
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = "Welcome to our network!";

    // Send SMS via Email-to-SMS Gateway
    $smsGateway = "your-sms-gateway.com"; // Replace with your SMS gateway
    $smsEmail = $phone . "@" . $smsGateway;
    $subject = "Captive Portal Access";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($smsEmail, $subject, $message, $headers)) {
        echo "SMS sent successfully!";
    } else {
        echo "Failed to send SMS.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Captive Portal</title>
</head>
<body>
    <h2>Login to Access the Network</h2>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>