<?php
include('Conexion.php');
class ModelCRUDJugador {
    public function insertJugador($rut, $dv, $nombre, $fecnac, $apellido, $alias, $mail, $nacionalidad) {
        $query = "INSERT INTO `tbl_jugador`(`rut_jugador`, `vch_dv_jugador`, `vch_nombre_jugador`, `vch_apellido_jugador`, `date_fecha_nacimiento_jugador`, `vch_mail_jugador`, `vch_alias_jugador`, `vch_nacionalidad_jugador`) VALUES ('$rut','$dv','$nombre','$apellido','$fecnac','$alias','$mail','$nacionalidad')";
        $men = "";
        $streamConnection = Conexion::comenzarConexion();
        if (mysqli_query($streamConnection, $query)) {
            $filas = mysqli_affected_rows($streamConnection);
            if ($filas == 1) {
                $men = "registro guardado con exito";
            } else {
                $men = "No se pudo realizar el registro";
            }
        } else {
            $men = "fallo conexion";
        }

        mysqli_close($streamConnection);
        return $men;
    }

    public function Searchjugador($nombre) {
        $query = "SELECT * FROM tbl_jugador WHERE VCH_NOMBRE_JUGADOR LIKE '%$nombre%'";
        $stringconnection = Conexion::comenzarConexion();
        $result = mysqli_query($stringconnection, $query);
        mysqli_close($stringconnection);
        return $result;
    }
}
