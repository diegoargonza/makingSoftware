<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombres = $_POST["nombres"] ?? '';
    $apellidos = $_POST["apellidos"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $texto = $_POST["texto"] ?? '';

    $mail = new PHPMailer(true);

    try {
        //Coanfigurción del servidor SMTP de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'correopru3b42@gmail.com'; // tu correo Gmail
        $mail->Password = 'sfhz wanm ykio zxpn'; // contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Remitente y destinatario
        $mail->setFrom('correopru3b42@gmail.com', 'Formulario MakingSoftware');
        $mail->addAddress('correopru3b42@gmail.com'); // tu correo de destino

        //Contenido
        $mail->isHTML(true);
        $mail->Subject = "Solicitud MakingSoftware $nombres";
        $mail->Body = "
            <b>Nombre:</b> $nombres $apellidos<br>
            <b>Correo:</b> $correo<br>
            <b>Teléfono:</b> $telefono<br>
            <b>Verificación:</b> $texto
        ";

        $mail->send();
        echo 'Mensaje enviado con éxito';
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }


}



?>