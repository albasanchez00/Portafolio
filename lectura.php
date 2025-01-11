<?php
// Reseteamos variables a NULL
$nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

if (isset($_POST['submit'])) {
    // Obtenemos valores del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mensaje = $_POST['mensaje'];
    $para = 'programacion12@ceatformacion.com';

    // Creamos cabecera
    $headers = 'From: ' . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    // Componemos cuerpo del correo
    $msjCorreo = "Nombre: " . $nombre . "<br>";
    $msjCorreo .= "Email: " . $email . "<br>";
    $msjCorreo .= "Asunto: " . $subject . "<br>";
    $msjCorreo .= "Mensaje: " . $mensaje . "<br>";

    // Enviamos correo
    if (mail($para, $subject, $msjCorreo, $headers)) {
        echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
              </script>";
        header("Location: contacto.php");
        exit();
    } else {
        echo "<script language='javascript'>
                alert('Fallo en el envío del mensaje.');
              </script>";
    }
}

