<?php

function send_mail($to, $subject,$body)
{
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
    $mail->From = 'denishmakwana6@gmail.com';
    $mail->FromName = 'Denish Makwana';
    $mail->addAddress($to);
    $mail->addReplyTo('denishmakwana6@gmail.com', 'Reply');
    
    $mail->isHTML(true);
    
    $mail->Subject = $subject;
    
    $mail->Body = $body;
    
    if($mail->send()) {
        return true;
    } else {
        return false;
    }
}




?>