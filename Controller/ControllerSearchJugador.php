<?php 
if (empty($_POST['nombre'])) {
  echo "El nombre esta vacio";
} else {
  $nombre = $_POST['nombre'];
}

include('../Model/ModelCRUDJugador.php');
$objugador = new ModelCRUDJugador();
$respuesta = $objugador -> Searchjugador($nombre);
foreach ($respuesta as $value) {
  echo $value['RUT_JUGADOR'] . " " . $value['VCH_DV_JUGADOR'] . " " . $value['VCH_NOMBRE_JUGADOR'] . " " . $value['VCH_APELLIDO_JUGADOR'] . " " . $value['DATE_FECHA_NACIMIENTO_JUGADOR'] . " " . $value['VCH_MAIL_JUGADOR'] . " " . $value['VCH_ALIAS_JUGADOR'] . " " . $value['VCH_NACIONALIDAD_JUGADOR'] . "<br>";
}
