<?php
//$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos","puerto");
$mysqli = new mysqli("localhost", "root", "", "formulario","3307");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

?>
