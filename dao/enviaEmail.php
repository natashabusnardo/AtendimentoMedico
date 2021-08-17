<?php

require_once('../lib/phpmailer/src/PHPMailer.php');
require_once('../lib/phpmailer/src/SMTP.php');
require_once('../lib/phpmailer/src/Exception.php');
include '../util/util.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class enviaEmail {
    public function geraEmail($atendimento)
    {

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'bccnatasha@gmail.com';
            $mail->Password   = 'Ahsatan1605!';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('bccnatasha@gmail.com');
            $mail->addAddress('bccnatasha@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Agendamento de Consulta';
            $mail->Body = 'Sua consulta está agendada para o dia '. dataTracoToPadrao($atendimento->getHorarioAtendimento());

            if($mail->send()){
                echo 'Email enviado com sucesso';
            } else{
                echo 'Email não enviado';
            }


        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}