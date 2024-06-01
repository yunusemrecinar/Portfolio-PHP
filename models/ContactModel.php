<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Example model for handling contact form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // $mj = new \Mailjet\Client('3411f0b8f93a560b0e2684f8214177ae', '33d327e6f8b46148f62f1d195b14b54d', true, ['version' => 'v3.1']);

    // $body = [
    //     'Messages' => [
    //         [
    //             'Form' => [
    //                 'Email' => 'www.yunuscinar4141@gmail.com',
    //                 'Name' => 'Yunus Emre Çınar'
    //             ],
    //             'To' => [
    //                 [
    //                     'Email' => 'yunusemre.cinar00@gmail.com',
    //                     'Name' => "Yunus Emre Çınar"
    //                 ]
    //             ],
    //             'Subject' => "New Contact Form Submission",
    //             'TextPart' => "Name: $name\nEmail: $email\n\nMessage:\n$message",
    //         ]
    //     ] 
    // ];

    // $response = $mj->post(Resources::$Email, ['body' => $body]);
    // if ($response->success()) {
    //     $feedback = "Thank you, $name. Your message has been sent";
    // } else {
    //     $feedback = "Message could not be sent. Mailjet Error: " . $response->getStatus();
    // }


    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'in-v3.mailjet.com';
        $mail->SMTPAuth = true;
        $mail->Username = '3411f0b8f93a560b0e2684f8214177ae'; // Your Mailjet API key
        $mail->Password = '33d327e6f8b46148f62f1d195b14b54d'; // Your Mailjet secret key
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom("www.yunuscinar4141@gmail.com", $name);
        $mail->addAddress('yunusemre.cinar00@gmail.com');

        //Content
        $mail->isHTML(false);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $mail->send();
        $feedback = "Thank you, $name. Your message has been sent";
    } catch (Exception $e) {
        $feedback = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
