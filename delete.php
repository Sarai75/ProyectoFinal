<?php
include 'db.php';

// Verificar si se recibió el ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error=ID+no+especificado");
    exit();
}

$id = intval($_GET['id']);

// Primero obtenemos la información del casco para mostrar en el mensaje
$sql_info = "SELECT modelo FROM cascos WHERE id = ?";
$stmt_info = $conexion->prepare($sql_info);
$stmt_info->bind_param("i", $id);
$stmt_info->execute();
$result_info = $stmt_info->get_result();

if ($result_info->num_rows == 0) {
    header("Location: index.php?error=Casco+no+encontrado");
    exit();
}

$casco = $result_info->fetch_assoc();
$modelo = $casco['modelo'];
$stmt_info->close();

// Ahora eliminamos el registro
$sql_delete = "DELETE FROM cascos WHERE id = ?";
$stmt_delete = $conexion->prepare($sql_delete);
$stmt_delete->bind_param("i", $id);

if ($stmt_delete->execute()) {
    header("Location: index.php?success=Casco+" . urlencode($modelo) . "+eliminado+exitosamente");
    exit();
} else {
    // Si hay error, mostramos página de error
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error - Eliminar Casco</title>
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
                            <h3 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Error</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="alert alert-danger">
                                <h4><i class="bi bi-x-circle-fill"></i> No se pudo eliminar el casco</h4>
                                <p>Error: <?php echo $stmt_delete->error; ?></p>
                            </div>
                            <a href="index.php" class="btn btn-custom mt-3">
                                <i class="bi bi-arrow-left"></i> Volver al listado
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}

$stmt_delete->close();
$conexion->close();
?>