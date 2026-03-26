<?php
$host = "localhost"; /* localhost es su entorno: la BD del hestia*/
$usuario = "a25paubarlim_apidaw";
$contrasenia = "apiDaw-8";
$base_de_datos = "a25paubarlim_apidaw";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;