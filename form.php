<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    try{
        $name = $_POST['isim'];
        $phone = $_POST['telefon'];
        $email = $_POST['mail'];
        $message = $_POST['mesaj'];

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.collesiummall.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@collesiummall.com';                     //SMTP username
        $mail->Password   = '72c20@Gxm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@collesiummall.com', 'Collesium Mall');
        $mail->addAddress('info@collesiummall.com', 'Collesium Mall');     //Add a recipient         //Name is optional
        $mail->addReplyTo($email, $name);

//        //Attachments
//        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Yeni Mesaj : ' . $name;
        $mail->Body    = 'Mesajı gönderenin bilgileri: <br> İsim: '.$name.'<br>Telefon: ' . $phone . '<br>Mail: ' . $mail . '<br> Mesaj: ' . $message;
        $mail->AltBody = 'Mesajı gönderenin bilgileri: <br> İsim: '.$name.'<br>Telefon: ' . $phone . '<br>Mail: ' . $mail . '<br> Mesaj: ' . $message;;

        $mail->send();
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
