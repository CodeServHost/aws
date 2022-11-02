<?php
include('mail/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "mail.anyawebsolution.in";
        $mail->Port = 587;
        //$mail->SMTPSecure = "ssl";
        $mail->SMTPAuth = true;
        $mail->Username = "donotreply@anyawebsolution.in";
        $mail->Password = 'g.oE89oTU#gR';
        $mail->setFrom('donotreply@anyawebsolution.ib', 'anyawebsolution');
        $mail->addAddress('mohitrawat1000@gmail.com', 'anyawebsolution');
        #$mail->addBCC('admin3@onlinew2i.com', 'linkingproperties');
        #$mail->addBCC('admin@onlinew2i.com', 'linkingproperties');
        $mail->Subject = 'subject';
        $mail->msgHTML('msg');
        //$mail->AltBody =$sub2;
        $mail->send();
        return true;
    } catch (phpmailerException $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


?>