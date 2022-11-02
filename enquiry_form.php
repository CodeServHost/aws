<?php
include('../mail/PHPMailerAutoload.php');
$status = false;
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

    $name = $_POST['name'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $message = $_POST['msg'];
    
  if(empty($name))
  {
    $errorlog = 'Name is Empty';
  }
  else if(empty($mobile))
  {
    $errorlog = 'Mobile is Empty';
  }
  else if(empty($email))
  {
    $errorlog = 'Email is Empty';
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $errorlog = 'Email is Not Valid';
  }
  else if(empty($location))
  {
    $errorlog = 'Location is Empty';
  }
  else if(empty($message))
  {
    $errorlog = 'Message is Empty';
  }
  else
  {
    $msg=' <div class="mail-msg">
      <table style="width:600px;margin:50px auto;border:1px solid
        #DDDDDD" width="700" cellspacing="0" cellpadding="0" border="0"
        align="center">
        <tbody>
          <tr>
            <td
              style="padding:10px;background-color:#dc1d2b;color:#FFF;"
              colspan="2" valign="middle" align="left">
              <h1 style="font-family:sans-serif; text-align: center;">Anya Web Solution</h1>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;" colspan="2" valign="middle"
              align="left">
              <p style="font-family:sans-serif;color:#dc1d2b; margin: 0px; padding: 0px;"><strong>Dear Admin</strong><br>
                <br>A new user details : </p>
              <ul style="list-style: none; margin-top:10px; padding: 0px; font-family: lato; line-height: 1.7;">

                <li style="margin: 0px; padding: 0px;"><strong>Name :</strong> '.$name.'</li>
                <li style="margin: 0px; padding: 0px;"><strong>Email :</strong> '.$email.'</li>
                <li style="margin: 0px; padding: 0px;"><strong>Mobile No :</strong> '.$mobile.'</li>
                <li style="margin: 0px; padding: 0px;"><strong>Location :</strong> '.$location.'</li>
                <li style="list-style: none; margin: 0px; padding: 0px;"><strong>Message :</strong>'.$message.'</li>
              </ul>
              <br>
              <br>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>';
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
        $mail->setFrom('donotreply@anyawebsolution.in', 'anyawebsolution');
        $mail->addAddress('anyawebsolution@gmail.com', 'anyawebsolution');
        $mail->Subject = 'Mail from '.$name;
        $mail->msgHTML($msg);
        if($mail->send())
        {
            $status = true;
            echo json_encode(array('status'=>$status,'error'=>$errorlog));
        }
      
        return true;
    } catch (phpmailerException $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
     

              
   }
}
