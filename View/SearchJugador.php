<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscar jugador</title>
</head>

<body>
    <form action="../Controller/ControllerSearchJugador.php" method="POST">
        <table border="1" align="center">
            <tr>
                <td> Nombre </td>
                <td> <input type="text" name="nombre" id="nombre"> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Buscar"></td>
            </tr>
        </table>
    </form>
</body>

</html>