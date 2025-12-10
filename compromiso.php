<?php
require "conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.html");
    exit;
}

$nombre   = trim($_POST['nombre'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$mensaje  = trim($_POST['mensaje'] ?? '');
$acepta   = isset($_POST['acepta']) ? 1 : 0;

if ($nombre === '' || $email === '') {
    die("Faltan datos obligatorios");
}

$ip  = $_SERVER['REMOTE_ADDR'] ?? '';
$ua  = $_SERVER['HTTP_USER_AGENT'] ?? '';

$sql = "INSERT INTO contactos_compromisos
        (nombre, email, telefono, mensaje, acepta_compromiso, ip_registro, user_agent)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssiss",
    $nombre,
    $email,
    $telefono,
    $mensaje,
    $acepta,
    $ip,
    $ua
);

$stmt->execute();

echo "Compromiso enviado correctamente ✅";

$stmt->close();
$conn->close();
