<?php 
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mailGet = $_POST['mail'];

    $mail = new PHPMailer(true);  
    $mail->isSMTP(); 
    $mail->CharSet = "UTF-8"; 
    $mail->Host = 'smtp.meta.ua'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'simon96@meta.ua';
    $mail->Password = 'ciria96';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port = 465;
    $mail->setFrom('simon96@meta.ua','Біланчук Семен');
    $mail->addAddress('semenbilanchuk96@gmail.com','Simon');
    $mail->isHTML(true); 
    $mail->Subject = "Im simon bilanchuk";
    $mail->Body = "asdasd.qweqweaasd <b>asdasdqw<b> asdasdwq asdaweq";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    if(!$mail->send()) {
        echo "Невозможно отправить письмо";
        echo "Mailer Error: ". $mail->ErrorInfo;
       } else {
        echo "Заявка успешно отправлена!";
       }


?>