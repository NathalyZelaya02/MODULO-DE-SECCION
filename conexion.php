<?php
$host = 'localhost';
$usuario = 'usuario_db';
$contraseña = 'contraseña_db';
$base_datos = 'nombre_db';

$conexion = mysqli_connect($host, $usuario, $contraseña, $base_datos);

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>
