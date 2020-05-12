<?php

    require_once('class/class.phpmailer.php');


    // Check for empty fields
    if(empty($_POST['name'])      ||
       empty($_POST['email'])     ||
       empty($_POST['phone'])     ||
       empty($_POST['message'])   ||
       !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
       {
       echo "No arguments Provided!";
       return false;
       }

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    $email_da_infobio = 'infobiojunior@gmail.com';
    $senha = 'InfobioJr@0!8';

    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 1;
    $mailer->Port = 587; //Indica a porta de conexão 
    $mailer->Host = 'smtp.gmail.com';//Endereço do Host do SMTP 
    $mailer->SMTPAuth = true; //define se haverá ou não autenticação 
    $mailer->Username = $email_da_infobio; //Login de autenticação do SMTP
    $mailer->Password = $senha; //Senha de autenticação do SMTP
    $mailer->FromName = 'Cliente'; //Nome que será exibido
    $mailer->From = $email_da_infobio; //Obrigatório ser a mesma caixa postal configurada no remetente do SMTP

    $mailer->AddAddress($email_da_infobio,'InfoBioJR');


    //Destinatários
    $mailer->Subject = 'Contato do site';
    $mailer->Body = " Email: " . $email_address . "\n Nome do cliente: " . $name . "\n Telefone: " . $phone . "\n Mensagem: \n" . $message;

    if(!$mailer->Send())
    {
    echo "Message was not sent";
    echo "Mailer Error: " . $mailer->ErrorInfo; exit; }