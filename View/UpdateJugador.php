<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar jugadores</title>
</head>

<body>
    <?php
    $rut = $_POST['r'];
    include('../Model/ModelCRUDJugador.php');
    $objugador = new ModelCRUDJugador();
    $respuesta = $objugador->searchJugadorPorRut($rut);
    foreach ($respuesta as $value) {
    ?>

    <form action="../controller/ControllerUpdateJugador.php" method="POST">
        <table border="0">
            <tr>
                <td>
                    rut
                </td>
                <td>
                    <input type="number" name="rut2" id="rut2" value="<?php echo $value['RUT_JUGADOR']; ?>" readonly>
                    <input type="hidden" name="rut" id="rut" value="<?php echo $value['RUT_JUGADOR']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    DV
                </td>
                <td>
                    <input type="text" name="dv" id="dv" value="<?php echo $value['VCH_DV_JUGADOR']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $value['VCH_NOMBRE_JUGADOR']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    apellido
                </td>
                <td>
                    <input type="text" name="apellido" id="apellido" value="<?php echo $value['VCH_APELLIDO_JUGADOR']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    fecha nacimiento
                </td>
                <td>
                    <input type="date" name="fecnac" id="fecnac" value="<?php echo $value['DATE_FECHA_NACIMIENTO_JUGADOR']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    alias
                </td>
                <td>
                    <input type="text" name="alias" id="alias" value="<?php echo $value['VCH_ALIAS_JUGADOR']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    mail
                </td>
                <td>
                    <input type="mail" name="mail" id="mail" value="<?php echo $value['VCH_MAIL_JUGADOR']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    nacionalidad
                </td>
                <td>
                    <input type="text" name="nacionalidad" id="nacionalidad" value="<?php echo $value['VCH_NACIONALIDAD_JUGADOR']; ?>" >
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Actualizar">
                </td>
            </tr>
        </table>
    </form>

    <?php } ?>
</body>

</html>