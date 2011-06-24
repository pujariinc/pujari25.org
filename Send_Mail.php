<?php
require_once("PHPMailer_v5.1/class.phpmailer.php");
function mail_send($mailer_name,$email_id)
{
 $smtp_secure='tls';
 $port=587;
 $name          = 'Pujari';
 $EMAIL_ID      = 'partha@methodologic.net';
 $MAIL_SERVER   = 'smtp.gmail.com';
 $USER_NAME     = 'partha@methodologic.net';
 $PASSWORD      = 'kenobolbo123';

 $to            = $email_id;
 $subject       ='Pujari :: A socio cultural organization in Atlanta, Georgia';
 $body          = "<span style='font-size:16px; line-height:22px; font-family:'Trebuchet MS', Calibri, Arial; color:#868686;'><font color='#868686'><p>Hi, Pujari is a socio-cultural organization in Atlanta, Georgia.</p>";
          $body.= "Please visit <a href='http://www.pujari.org'>Pujari.org</a> for more information.<br/><br/>";
		  $body.= "Thanks,<br/>$mailer_name</font></span>";
$mail = new PHPMailer();
$mail->SetLanguage("en", 'PHPMailer_v5.1/class.phpmailer.php/language/');
$mail->IsSMTP();  // telling the class to use SMTP
$mail->SMTPAuth     = true;
                // enable SMTP authentication

if($smtp_secure!='none')
{

$mail->SMTPSecure   = $smtp_secure;
}
$mail->Host         = $MAIL_SERVER; // sets the SMTP server
if($port)
$mail->Port         = $port;        // set the SMTP port for the GMAIL server
$mail->Username     = $USER_NAME ; // SMTP account username
$mail->Password     = $PASSWORD;
$mail->SetFrom($EMAIL_ID,$name);
$mail->AddAddress($to);
$mail->IsHTML(true);
$mail->Subject  = $subject;
$mail->Body    = $body;
if(!$mail->Send()) {
  $failure= 'Message was not sent.';
 # $failure .= 'Mailer error: ' . $mail->ErrorInfo;
  echo $failure;
}
else {
    $sucess= 'Mail Sent Successfully.';
}
}
?>