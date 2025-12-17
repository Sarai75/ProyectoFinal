<?php
include 'db.php';

// Verificar si es método POST y tiene ID
if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST['id'])) {
    header("Location: index.php");
    exit();
}

// Validar ID
$id = intval($_POST['id']);
if ($id <= 0) {
    header("Location: index.php?error=ID+inválido");
    exit();
}

// Validar campos obligatorios
if (empty($_POST['modelo']) || empty($_POST['marca']) || empty($_POST['talla']) || empty($_POST['precio'])) {
    header("Location: edit.php?id=" . $id . "&error=Faltan+campos+obligatorios");
    exit();
}

// Sanitizar datos
$modelo = escape($conexion, $_POST['modelo']);
$marca = escape($conexion, $_POST['marca']);
$talla = escape($conexion, $_POST['talla']);
$color = isset($_POST['color']) ? escape($conexion, $_POST['color']) : '';
$precio = floatval($_POST['precio']);
$stock = isset($_POST['stock']) ? intval($_POST['stock']) : 0;

// Validaciones
if ($precio <= 0) {
    header("Location: edit.php?id=" . $id . "&error=Precio+debe+ser+mayor+a+cero");
    exit();
}

if ($stock < 0) {
    header("Location: edit.php?id=" . $id . "&error=Stock+no+puede+ser+negativo");
    exit();
}

// Actualizar en la base de datos
$sql = "UPDATE cascos SET 
        modelo = ?, 
        marca = ?, 
        talla = ?, 
        color = ?, 
        precio = ?, 
        stock = ? 
        WHERE id = ?";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . $conexion->error);
}

$stmt->bind_param("ssssdii", $modelo, $marca, $talla, $color, $precio, $stock, $id);

if ($stmt->execute()) {
    // Verificar si se actualizó alguna fila
    if ($stmt->affected_rows > 0) {
        header("Location: index.php?success=Casco+" . urlencode($modelo) . "+actualizado+exitosamente");
        exit();
    } else {
        header("Location: index.php?info=No+se+realizaron+cambios+en+el+casco");
        exit();
    }
} else {
    // Error en la ejecución
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error - Actualizar Casco</title>
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
                            <h3 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Error al Actualizar</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="alert alert-danger">
                                <h4><i class="bi bi-x-circle-fill"></i> No se pudo actualizar el casco</h4>
                                <p>Error: <?php echo $stmt->error; ?></p>
                            </div>
                            <div class="mt-4">
                                <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-secondary me-2">
                                    <i class="bi bi-arrow-left"></i> Volver a editar
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