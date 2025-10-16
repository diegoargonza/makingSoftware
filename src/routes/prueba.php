<?php


echo htmlspecialchars($_POST['nombres']);
//     if($_SERVER["REQUEST_METHOD"]=== 'POST'){

//     }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
//     // Recopilar datos del formulario
//     $nombres = filter_var($_POST['nombres'], FILTER_SANITIZE_STRING);
//     $apellidos = filter_var($_POST['apellidos'], FILTER_SANITIZE_STRING);
//     $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
//     $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);

//     // Validar el email
//     if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
//         die('Dirección de correo electrónico no válida.');
//     }

//     // Datos del destinatario y asunto
//     $para = 'diegoargonza8@gmail.com';
//     $titulo = 'Mensaje de mi formulario Svelte';
//     $encabezados = 'From: ' . $correo; // El correo del formulario como remitente

//     // Cuerpo del mensaje
//     $msjCorreo = "Nombre: $nombres\nEmail: $correo\nMensaje:\n$apellidos";

//     // Enviar el correo
//     if (mail($para, $titulo, $msjCorreo, $encabezados)) {
//         // Mostrar un mensaje de éxito (puedes redireccionar o mostrar en la misma página)
//         echo "<script language='javascript'>alert('Mensaje enviado, muchas gracias.');</script>";
//     } else {
//         // Mostrar un mensaje de error
//         echo "<script language='javascript'>alert('Falló el envío del mensaje.');</script>";
//     }
// } else {
//     echo "<script language='javascript'>alert('Método no permitido.');</script>";
// }

?>