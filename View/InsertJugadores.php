<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar jugadores</title>
</head>
<body>
    <form action="../controller/ControllerInsertJugador.php" method="POST">
        <table border="0">
            <tr>
                <td>
                    rut
                </td>
                <td>
                    <input type="number" name="rut" id="rut">
                </td>
            </tr>
            <tr>
                <td>
                    DV
                </td>
                <td>
                    <input type="text" name="dv" id="dv">
                </td>
            </tr>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    <input type="text" name="nombre" id="nombre">
                </td>
            </tr>
            <tr>
                <td>
                    apellido
                </td>
                <td>
                    <input type="text" name="apellido" id="apellido">
                </td>
            </tr>
            <tr>
                <td>
                    fecha nacimiento
                </td>
                <td>
                    <input type="date" name="fecnac" id="fecnac">
                </td>
            </tr>
            <tr>
                <td>
                    alias
                </td>
                <td>
                    <input type="text" name="alias" id="alias">
                </td>
            </tr>
            <tr>
                <td>
                    mail
                </td>
                <td>
                    <input type="mail" name="mail" id="mail">
                </td>
            </tr>
            <tr>
                <td>
                    nacionalidad
                </td>
                <td>
                    <input type="text" name="nacionalidad" id="nacionalidad">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Registrar">
                </td>
            </tr>
        </table>
    </form> 
</body>
</html>