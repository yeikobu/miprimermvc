<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar jugadores</title>
</head>
<body>
  <?php
  $r=$_POST['r'];
  $dv=$_POST['dv'];
  $n=$_POST['n'];
  $a=$_POST['a'];
  $f=$_POST['f'];
  $m=$_POST['m'];
  $al=$_POST['al'];
  $na=$_POST['na'];
  ?>
    <form action="../controller/ControllerDeleteJugador.php" method="POST">
        <table border="0">
            <tr>
                <td>
                    rut
                </td>
                <td>
                    <input type="number" name="rut2" id="rut2" value="<?php echo $r; ?>" disabled>
                    <input type="hidden" name="rut" id="rut" value="<?php echo $r; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    DV
                </td>
                <td>
                    <input type="text" name="dv" id="dv" value="<?php echo $dv; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $n; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    apellido
                </td>
                <td>
                    <input type="text" name="apellido" id="apellido" value="<?php echo $a; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    fecha nacimiento
                </td>
                <td>
                    <input type="date" name="fecnac" id="fecnac" value="<?php echo $f; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    alias
                </td>
                <td>
                    <input type="text" name="alias" id="alias" value="<?php echo $al; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    mail
                </td>
                <td>
                    <input type="mail" name="mail" id="mail" value="<?php echo $m; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    nacionalidad
                </td>
                <td>
                    <input type="text" name="nacionalidad" id="nacionalidad" value="<?php echo $na; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Eliminar">
                </td>
            </tr>
        </table>
    </form> 
</body>
</html>