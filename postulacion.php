<?php
/*conexion a la base de datos */

$base_de_datos = mysqli_connect('localhost', 'root', '', 'filetto') or exit('No se puede conectar con la base de datos');

/* Variables del formulario de postulacion */
$nombre_registro = $_POST['nombre'];
$apellido_registro = $_POST['apellido'];
$dni_registro = $_POST['dni'];
$tel_registro = $_POST['telefono'];
$email_registro = $_POST['email'];
$sector_registro = $_POST['sector'];

/* consulta para evitar multiple postulaciones */

$consulta = mysqli_query($base_de_datos, "SELECT dni from postulantes WHERE dni = '$dni_registro'");

mysqli_query($base_de_datos, "INSERT INTO postulantes VALUES ('$dni_registro','$nombre_registro',
  '$apellido_registro','$tel_registro','$email_registro','$sector_registro')");
  header("Location: index.php?ok#form_postulantes");
// Sentencia para evitar que se siga ejecutando si falla la consulta
if (!$consulta) {

  echo mysqli_error($mysqli);

  exit;
}

if ($dni_registro = mysqli_fetch_assoc($consulta)) {
  header("Location: index.php?error#form_postulantes");
}
