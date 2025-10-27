<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombres = $_POST["nombres"] ?? '';
    $apellidos = $_POST["apellidos"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $texto = $_POST["texto"] ?? '';

    $destinatario="correopru3b42@gmail.com";
    $asunto="Nuevo-mensaje-MakingSoftware ($correo)";

    $contenido="Nombre: $nombres \n";
    $contenido.="Correo: $correo\n";
    $contenido.="Teléfono: $telefono\n";
    $contenido.="verificación: $texto\n";

    $headers="From: correopru3b42@soft.com";
    $headers .= "Reply-To: $correo\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $mail=mail($destinatario,$asunto,$contenido,$headers);

    if($mail){
        echo 'Mensaje enviado con exito';
    }else{
        echo 'El mensaje no se envio correctamente';
    }
}



// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $nombres = $_POST['nombres'] ?? '';
//     $apellidos = $_POST['apellidos'] ?? '';
//     $correo  = $_POST['correo'] ?? '';
//     $telefono = $_POST['telefono'] ?? '';
//     $texto = $_POST['texto'] ?? '';

//     $para = "diegoargonza8@gmail.com";
//     $asunto = "Prueba de formulario svelte con php";
    
//     $mensaje = "
//         Nombre: $nombres $apellidos
//         Correo: $correo
//         Telefono: $telefono
//         Texto: $texto 
//     ";

//     mail(
//     $destinatario = "diegoargonza8@gmail.com", 
//     $asunto = "información makingSoftware",  
//     $cuerpo = $mensaje );

//     $headers = "From: $correo\r\n" .
//                "Reply-To: $correo\r\n" .
//                "X-Mailer: PHP/" . phpversion();



//     if (mail($para, $asunto, $mensaje, $headers)) {
//         echo "Mensaje enviado correctamente.";
//     } else {
//        echo "El formulario se ha enviado correctamente (modo local).";
//        echo nl2br($mensaje);
//     }
// }



// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $nombres = $_POST['nombres'] ?? '';
//     $apellidos = $_POST['apellidos'] ?? '';
//     $correo  = $_POST['correo'] ?? '';
//     $telefono = $_POST['telefono'] ?? '';
//     $texto = $_POST['texto'] ?? '';


//     mail(
//     $destinatario = "diegoargonza8@gmail.com", 
//     $asunto = "información makingSoftware",  
//     $cuerpo = $mensaje );

//     $mensaje = "
//         Nombre: $nombres $apellidos
//         Correo: $correo
//         Telefono: $telefono
//         Texto: $texto 
//     ";

//     $headers = "From: $correo\r\n" .
//                "Reply-To: $correo\r\n" .
//                "X-Mailer: PHP/" . phpversion();; 
// }



?>