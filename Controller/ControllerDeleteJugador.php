<?php

if (empty($_POST['rut'])) { 
    echo "El rut esta vacio";
} else { 
    $rut = $_POST['rut']; //POST necesita el name que le asignamos a la etiqueta de la etiqueta html
    echo $rut;
}

include('../Model/ModelCRUDJugador.php');


$objJugador = new ModelCRUDJugador();
$respuesta = $objJugador -> deleteJugador($rut);
echo $respuesta;
?>
