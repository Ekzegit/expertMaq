<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['empresa'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su empresa es: " . $empresa . " \r\n";
$mensaje .= "Su asunto: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'contacto@expertmaq.cl';
$asunto = 'Mensaje de mi sitio web';
mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location: index.html");
?>