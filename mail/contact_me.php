<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

require 'PHPMailer/vendor/autoload.php';

    // Check for empty fields
    if(empty($_POST['name'])      ||
       empty($_POST['email'])     ||
       empty($_POST['assunto'])     ||
       empty($_POST['message'])   ||
       !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
       {
       echo 'Ocorreu um erro no envio da mensagem, tente novamente mais tarde';
       }

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $assunto = strip_tags(htmlspecialchars($_POST['assunto']));
    $message = strip_tags(htmlspecialchars($_POST['message']));


    $mail = new PHPMailer(TRUE);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->AuthType = 'XOAUTH2';
    $mail->CharSet = PHPMailer::CHARSET_UTF8;

    $mail->oauthUserEmail = "infobiojunior@gmail.com";
    $clientId = '45434933034-247c1d7o11if1na1m83vgbest6mvjose.apps.googleusercontent.com';
    $clientSecret = '5Rl1x-Ie5Wad1mBatZ9j1No5';
    $refreshToken = '1//0h1RCqKEh9VLQCgYIARAAGBESNwF-L9IrRpSzqSyX0vDZjXkV8tg3pYCpmIFCcjTUuu6KllCmCmWymUx4ZUchdxN-ppgF5RqcaqE';

    $provider = new Google(
    [
        'clientId' => $clientId,
        'clientSecret' => $clientSecret,
    ]
    );

    $mail->setOAuth(
    new OAuth(
        [
            'provider' => $provider,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName' => 'infobiojunior@gmail.com',
        ]
    )
    );

    $email_da_infobio = 'infobiojunior@gmail.com';

    $mail->setFrom($email_da_infobio, $name);
    $mail->addAddress($email_da_infobio, 'infobioJr');
    $mail->Subject = $assunto;
    $mail->Body = 'Email do cliente: '. $email . "\nNome do cliente: ". $name . "\n" . "\n Conteúdo: \n" .  $message;


if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    header('location: http://localhost/site-infobiojr/mail.html');
}