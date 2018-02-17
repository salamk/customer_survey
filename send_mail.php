<?php
require_once('class.smtp.php');
require_once('class.phpmailer.php');

//----------------------------------------------
// Send an e-mail. Returns true if successful 
//
//   $to - destination
//   $nameto - destination name
//   $subject - e-mail subject
//   $message - HTML e-mail body
//   altmess - text alternative for HTML.
//----------------------------------------------
function sendmail($to, $nameto, $subject, $message, $altmess) {

    $from = "salamk17@gmail.com";
    $namefrom = "Salam Esap Zoy";

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();   // by SMTP
    $mail->SMTPAuth = true;   // user and password
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = $from;
    $mail->Password = "3032-$@l@m";
    $mail->SMTPSecure = "ssl";    // options: 'ssl', 'tls' , ''  
    $mail->setFrom($from, $namefrom);   // From (origin)
    $mail->addCC($from, $namefrom);      // There is also addBCC
    $mail->Subject = $subject;
    $mail->AltBody = $altmess;
    $mail->Body = $message;
    $mail->isHTML();   // Set HTML type
//$mail->addAttachment("attachment");  
    $mail->addAddress($to, $nameto);
    return $mail->send();
}

?>
