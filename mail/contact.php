<?php

$to = "bpirisr@gmail.com";
$subject = "Asunto del correo";
$message = "Este es el cuerpo del correo electrónico.";

$headers = "From: remitente@example.com\r\n";
$headers .= "Reply-To: remitente@example.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);

// //Import PHPMailer classes into the global namespace
// //These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/Exception.php';

// if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   http_response_code(500);
//   exit();
// }

// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
// $message = strip_tags(htmlspecialchars($_POST['message']));


// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//   //Server settings
//   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//   $mail->isSMTP();                                            //Send using SMTP
//   $mail->Host       = 'smtp.ionos.es';                     //Set the SMTP server to send through
//   $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//   $mail->Username   = 'bpiris@mrpelon.com';                     //SMTP username
//   $mail->Password   = 'Mrpelon123.';                               //SMTP password
//   $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
//   $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  
//   //Recipients
//   $mail->setFrom('bpiris@mrpelon.com', 'MRPELON');
//   $mail->addAddress("bpirisr@gmail.com");     //Add a recipient
//   // $mail->addAddress('ellen@example.com');               //Name is optional
//   // $mail->addReplyTo('info@example.com', 'Information');
//   // $mail->addCC('cc@example.com');
//   // $mail->addBCC('bcc@example.com');

//   // //Attachments
//   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//   //Content
//   $mail->isHTML(true);                                  //Set email format to HTML
//   $mail->Subject = "$m_subject:  $name";
//   $mail->Body    = "Correo recibido desde MR Pelon.<p>"."<p>Nombre: $name<p>Email: $email<p>Asunto: $m_subject<p>Mensaje: $message";
//   $mail->AltBody = "Correo recibido desde MR Pelon.<p>"."<p>Nombre: $name<p>Email: $email<p>Asunto: $m_subject<p>Mensaje: $message";
//   $mail->send();

// } catch (Exception $e) {
//   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
?>
