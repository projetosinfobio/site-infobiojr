<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['assunto'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name_from = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$assunto = strip_tags(htmlspecialchars($_POST['assunto']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$mail = new PHPMailer;

$email_da_infobio = 'infobiojunior@gmail.com';
   
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;smtp2.gmail.com';     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $email_da_infobio;                  // SMTP username
$mail->Password = 'InfobioJr@0!8';                    // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email_da_infobio, $name_from);        // O email da infobio vai aqui por conta de restrições do google
$mail->addAddress($email_da_infobio, 'InfoBioJr');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $assunto; 
$mail->Body    = 'Email do cliente: '. $email . "<br>Nome do cliente: ". $name_from . "<br>" . "<br> Conteúdo: <br>" .  $message; //Deve colocar o email do cliente aqui por restrições do Google

if(!$mail->send()) {
    echo "Email não pode ser enviado, por favor contacte o administrador da página.";
    echo "<br> Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: /site-infobiojr/index.html");
}
?>