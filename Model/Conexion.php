<?php
class Conexion
{
  public static function comenzarConexion() {
    $server = "127.0.0.1";
    $user = "root";
    $password = "";
    $db = "torneociisa";
    $stringConnection = mysqli_connect($server, $user, $password, $db);

    return $stringConnection;
  }
}
