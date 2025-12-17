<?php
$host = "localhost";
$usuario = "root";
$password = "";   
$basedatos = "escuela";

$conexion = new mysqli($host, $usuario, $password, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");

function escape($conexion, $string) {
    return $conexion->real_escape_string(trim($string));
}
?>