<?php
// guardar.php - Procesa el formulario
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string(trim($_POST['nombre']));
    $grupo = $conexion->real_escape_string(trim($_POST['grupo']));
    $usa_casco = $conexion->real_escape_string(trim($_POST['usa_casco']));
    $certificacion = $conexion->real_escape_string(trim($_POST['certificacion']));
    $comentario = $conexion->real_escape_string(trim($_POST['comentario']));
    
    $sql = "INSERT INTO encuestas (nombre, grupo, usa_casco, certificacion, comentario) 
            VALUES ('$nombre', '$grupo', '$usa_casco', '$certificacion', '$comentario')";
    
    if ($conexion->query($sql)) {
        header("Location: index.php?exito=1");
        exit();
    } else {
        echo "Error: " . $conexion->error;
    }
    
    $conexion->close();
} else {
    echo "Acceso incorrecto";
}
?>