<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $projeto = $_POST['projeto'];
    $msg = $_POST['msg'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'guihlimadev@gmail.com';                     //SMTP username
        $mail->Password   = 'krycovwehzbkqiwu';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('guihlimadev@gmail.com', 'Mailer');
        $mail->addAddress('guihlimadev@gmail.com', 'Joe User');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($email, $nome);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Formulario';

        

        $body = "<h3>Formulario do Portfolio</h3>: <br>
             Nome: $nome <br> 
             Email: $email <br> 
             Projeto: $projeto <br>
             Mensagem: <br> $msg";

        $mail->Body = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Email enviado com sucesso';
    } catch (Exception $e) {
        echo "Erro ao enviar este email: {$mail->ErrorInfo}";
    }
}else{
    echo "Erro ao enviar email, acesso nao via formulario";
}

?>