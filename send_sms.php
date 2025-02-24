<?php
// Captive Portal SMS Sending Script
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$phone = $data['phone'];
$message = "Welcome to our network!";

// Send SMS via Email-to-SMS Gateway
$smsGateway = "mail2sms.swisscom.com"; // Replace with your SMS gateway
$smsEmail = $phone . "@" . $smsGateway;
$subject = "Captive Portal Access";
$headers = "From: timeout.alarm@schulen-frauenfeld.ch";

if (mail($smsEmail, $subject, $message, $headers)) {
    echo "SMS sent successfully!";
} else {
    echo "Failed to send SMS.";
}
?>
