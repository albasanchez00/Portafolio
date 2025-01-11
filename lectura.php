<?php
// Reseteamos variables a NULL
$nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

if (isset($_POST['submit'])) {
    // Obtenemos valores del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mensaje = $_POST['mensaje'];
    $para = 'alba@alba.cursoceat.es';

    // Creamos cabecera
    $headers = 'From: ' . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    // Componemos cuerpo del correo
    $msjCorreo .= "Email: " . $email . "<br>";
    $msjCorreo = "Nombre: " . $nombre . "<br>";
    $msjCorreo .= "Asunto: " . $subject . "<br>";
    $msjCorreo .= "Mensaje: " . $mensaje . "<br>";

    // Enviamos correo
    if (mail($para, $subject, $msjCorreo, $headers)) {
        header("Location: contacto.php");
        echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
              </script>";
    } else {
        echo "<script language='javascript'>
                alert('Fallo en el envío del mensaje.');
              </script>";
    }
}

