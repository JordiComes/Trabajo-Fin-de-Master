<?php

$mysqli = new mysqli('localhost', 'root', '', 'tienda_crypto');

/*
 * Esta es la forma OO "oficial" de hacerlo,
 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
 */
if ($mysqli->connect_error) {
  die('Error de Conexión (' . $mysqli->connect_errno . ') '
    . $mysqli->connect_error);
}else {
  //*echo "Conexion establecida";
}
