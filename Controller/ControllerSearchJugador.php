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
  echo "
    <form action=../View/DeleteJugador.php method=POST>
      <input type=hidden name=r id=r value=".$value['RUT_JUGADOR'].">
      <input type=hidden name=dv id=dv value=".$value['VCH_DV_JUGADOR'].">
      <input type=hidden name=n id=n value=".$value['VCH_NOMBRE_JUGADOR'].">
      <input type=hidden name=a id=a value=".$value['VCH_APELLIDO_JUGADOR'].">
      <input type=hidden name=f id=f value=".$value['DATE_FECHA_NACIMIENTO_JUGADOR'].">
      <input type=hidden name=m id=m value=".$value['VCH_MAIL_JUGADOR'].">
      <input type=hidden name=al id=al value=".$value['VCH_ALIAS_JUGADOR'].">
      <input type=hidden name=na id=na value=".$value['VCH_NACIONALIDAD_JUGADOR'].">
      <input type=submit value=Eliminar>
    </form>
  ";
  echo "
    <form action=../View/UpdateJugador.php method=POST>
      <input type=hidden name=r id=r value=".$value['RUT_JUGADOR'].">
      <input type=submit value=Actualizar>
    </form>
  ";
}
