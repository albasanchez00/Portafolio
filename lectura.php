<?php
//Reseteamos variables a 0.
$nombre = $email = $subject = $mensaje = $para = $headers = $mensaje = NULL;

if (isset($_POST['submit'])) {
    //Obtenemos valores input formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mensaje = $_POST['mensaje'];
    $para = 'albasanchezolmedo00@gmail.com';

    //Creamos cabecera.
    $headers = 'From' . " " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    //Componemos cuerpo correo.
    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Asunto: " . $subject;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Mensaje: " . $mensaje;
    $msjCorreo .= "\r\n";

    if (mail($para, $subject, $mensaje, $headers, $nombre)) {
        echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
        header("Location:contacto.php");
    } else {
        echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
}
