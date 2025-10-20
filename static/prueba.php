<?php




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombres = $_POST['nombres'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $correo  = $_POST['correo'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $texto = $_POST['texto'] ?? '';

    $para = "diegoargonza8@gmail.com";
    $asunto = "Prueba de formulario svelte con php";
    
    $mensaje = "
        Nombre: $nombres $apellidos
        Correo: $correo
        Telefono: $telefono
        Texto: $texto 
    ";

    $headers = "From: $correo\r\n" .
               "Reply-To: $correo\r\n" .
               "X-Mailer: PHP/" . phpversion();



    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
       echo "El formulario se ha enviado correctamente (modo local).";
       echo nl2br($mensaje);
    }
}

?>