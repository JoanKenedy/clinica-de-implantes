<?php

$destinatario: 'joankenedi9311@gmail.com';

$nombre = $_POST['nombre'];
$tratamiento = $_POST['tratamiento'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$header = "Enviado desde el formulario del sitio web Clinica de Implantes";
$mensajeCompleto = $nombre . "y quiero informacion del tratamiento" . $tratamiento . "le dejo mi teléfono que es el " $telefono . "y mi correo" . $email 

mail($destinatario, $mensajeCompleto, $header );
?>