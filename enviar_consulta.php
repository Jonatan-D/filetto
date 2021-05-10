<?php
/* Variables del formulario de registro*/
$nombre_formulario = $_POST['nombre'];
$apellido_formulario = $_POST['apellido'];
$tel_formulario = $_post['telefono'];
$email_formulario = $_POST['email'];
$consulta_formulario = $_POST['consulta'];

/*Variables para responder mail */
$soporte = 'Equipo Filetto';
$email_soporte = 'filetto@gmail.com';
$remitente = "From: $filetto<$email_soporte>";
$asunto_email = "Consulta recibida";
$cuerpo_email = "Bienvenido/a " . $nombre_registro . " gracias por tu consulta,
 nos comunicaremos con usted a la brevedad. n\ Saludos cordiales.";

/* mail enviado como autorespuesta con datos de registro*/

@mail($email_formulario, $asunto_email, $cuerpo_email, $remitente);

/* Correo de consulta de cliente*/
$cuerpo = "Nombre: " . $nombre_formulario . "r\n\". Apellido: " . $apellido_formulario . "r\n\".Edad: " . $edad_formulario .
    "r\n\". Correo electrónico: " . $email_formulario . "r\n\". Motivo del mensaje: " . $motivo_formulario . "r\n\".  Mensaje: " . $areatexto_formulario;

$respuesta = "From: $nombre_formulario $apellido_formulario <$email_formulario>";
@mail("jonatandeporte@gmail.com", "Consulta enviada desde sitio web", $cuerpo, $respuesta);

header("Location: index.php?ok#contacto");
