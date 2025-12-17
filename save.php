<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: create.php");
    exit();
}
if (empty($_POST['modelo']) || empty($_POST['marca']) || empty($_POST['talla']) || empty($_POST['precio'])) {
    header("Location: create.php?error=Faltan+campos+obligatorios");
    exit();
}
$modelo = escape($conexion, $_POST['modelo']);
$marca = escape($conexion, $_POST['marca']);
$talla = escape($conexion, $_POST['talla']);
$color = isset($_POST['color']) ? escape($conexion, $_POST['color']) : '';

$sql = "INSERT INTO cascos (modelo, marca, talla, color, precio, stock) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . $conexion->error);
}

$stmt->bind_param("ssssdi", $modelo, $marca, $talla, $color, $precio, $stock);

if ($stmt->execute()) {
    header("Location: index.php?success=Casco+" . urlencode($modelo) . "+agregado+exitosamente");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error - Guardar Casco</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-custom">
                            <h3 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Error al Guardar</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="alert alert-danger">
                                <h4><i class="bi bi-x-circle-fill"></i> No se pudo guardar el casco</h4>
                                <p>Error: <?php echo $stmt->error; ?></p>
                                <p>SQL: <?php echo $sql; ?></p>
                            </div>
                            <div class="mt-4">
                                <a href="create.php" class="btn btn-secondary me-2">
                                    <i class="bi bi-arrow-left"></i> Volver al formulario
                                </a>
                                <a href="index.php" class="btn btn-custom">
                                    <i class="bi bi-list"></i> Ver listado
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}

$stmt->close();
$conexion->close();
?>