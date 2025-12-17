<?php
// index.php - Listado de cascos
include 'db.php';

// Obtener todos los cascos
$sql = "SELECT * FROM cascos ORDER BY id DESC";
$resultado = $conexion->query($sql);

// Obtener estadísticas
$stats_sql = "SELECT 
    COUNT(*) as total,
    SUM(stock) as total_stock,
    SUM(precio * stock) as valor_total,
    AVG(precio) as precio_promedio
    FROM cascos";
$stats_result = $conexion->query($stats_sql);
$stats = $stats_result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Cascos - Inventario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background: rgb(88, 25, 25);
            color: white;
        }
        .card {
            border-radius: 15px;
            border: 2px solid rgb(184, 197, 187);
            background-color: white;
            color: #333;
        }
        .btn-custom {
            background-color: rgb(0, 0, 0);
            border: none;
            color: white;
        }
        .btn-custom:hover {
            background-color: rgb(43, 43, 43);
        }
        .table-header {
            background-color: rgb(88, 25, 25);
            color: white;
        }
        .badge-stock {
            font-size: 0.9em;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4" style="background-color: rgb(88, 25, 25);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-5 fw-bold">
                        <i class="bi bi-shield-check"></i> Gestión de Cascos
                    </h1>
                    <p class="lead">Administra tu inventario de cascos</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="create.php" class="btn btn-custom btn-lg">
                        <i class="bi bi-plus-circle"></i> Nuevo Casco
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <!-- Mensajes -->
        <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <i class="bi bi-check-circle-fill"></i> 
                <?php echo htmlspecialchars($_GET['success']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <i class="bi bi-exclamation-triangle-fill"></i> 
                <?php echo htmlspecialchars($_GET['error']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        sd
        <div class="card">
            <div class="card-header table-header">
                <h3 class="mb-0"><i class="bi bi-list-check"></i> Listado de Cascos</h3>
            </div>
            <div class="card-body">
                <?php if($resultado->num_rows > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>ID</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Talla</th>
                                    <th>Color</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($casco = $resultado->fetch_assoc()): ?>
                                   
                                    <tr>
                                        <td><strong>#<?php echo $casco['id']; ?></strong></td>
                                        <td>
                                            <i class="bi bi-shield"></i> 
                                            <?php echo htmlspecialchars($casco['modelo']); ?>
                                        </td>
                                        <td>
                                            <span class="badge bg-dark"><?php echo htmlspecialchars($casco['marca']); ?></span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary"><?php echo htmlspecialchars($casco['talla']); ?></span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill" style="background-color: #<?php echo substr(md5($casco['color']), 0, 6); ?>;">
                                                <?php echo htmlspecialchars($casco['color']); ?>
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="edit.php?id=<?php echo $casco['id']; ?>" 
                                                   class="btn btn-outline-primary btn-sm">
                                                    <i class="bi bi-pencil"></i> Editar
                                                </a>
                                                <a href="delete.php?id=<?php echo $casco['id']; ?>" 
                                                   class="btn btn-outline-danger btn-sm"
                                                   onclick="return confirm('¿Eliminar el casco <?php echo addslashes($casco['modelo']); ?>?')">
                                                    <i class="bi bi-trash"></i> Eliminar
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-center py-5">
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle display-4"></i>
                            <h3>No hay cascos registrados</h3>
                            <p>Comienza agregando tu primer casco al inventario</p>
                            <a href="create.php" class="btn btn-custom btn-lg mt-3">
                                <i class="bi bi-plus-circle"></i> Agregar Primer Casco
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-muted text-center">
                <i class="bi bi-database"></i> 
                Total registros: <?php echo $resultado->num_rows; ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        setTimeout(function() {
            document.querySelectorAll('.alert').forEach(function(alert) {
                var bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
</body>
</html>
<?php $conexion->close(); ?>