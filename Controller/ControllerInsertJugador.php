<?php

if (empty($_POST['rut'])) { 
    echo "El rut esta vacio";
} else { 
    $rut = $_POST['rut']; //POST necesita el name que le asignamos a la etiqueta de la etiqueta html
}

if (empty($_POST['dv'])) { 
    echo "El dv esta vacio";
} else { 
    $dv = $_POST['dv'];
}

if (empty($_POST['nombre'])) { 
    echo "El nombre esta vacio";
} else { 
    $nombre = $_POST['nombre'];
}

if (empty($_POST['apellido'])) { 
    echo "El apellido esta vacio";
} else { 
    $apellido = $_POST['apellido'];
}

if (empty($_POST['fecnac'])) { 
    echo "El fecha nacimiento esta vacio";
} else { 
    $fecnac = $_POST['fecnac'];
}

if (empty($_POST['alias'])) { 
    echo "El alias esta vacio";
} else { 
    $alias = $_POST['alias'];
}

if (empty($_POST['mail'])) { 
    echo "El mail esta vacio";
} else { 
    $mail = $_POST['mail'];
}

if (empty($_POST['nacionalidad'])) { 
    echo "La nacionalidad esta vacio";
} else { 
    $nacionalidad = $_POST['nacionalidad'];
}

include('../Model/ModelCRUDJugador.php');

$objJugador = new ModelCRUDJugador();
$respuesta = $objJugador -> insertJugador($rut, $dv, $nombre, $fecnac, $apellido, $alias, $mail, $nacionalidad);
echo $respuesta;
?>