<?php
// Varios destinatarios
    $destinatario = 'raesicochabamba@gmail.com';


    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];
// título
    $título = "Enviado desde la pagina web de Raesi";
    $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre;

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
    $cabeceras .= 'To: Mary <raesicochabamba@gmail.com>' . "\r\n";
    $cabeceras .= 'From: Recordatorio <'.$email.'>' . "\r\n";


// Enviarlo
mail($destinatario, $título, $mensajeCompleto, $cabeceras);
?>