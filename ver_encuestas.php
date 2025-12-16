<?php
require_once 'config.php';
$sql = "SELECT * FROM encuestas ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Encuestas - Base de Datos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(88, 25, 25);
            padding: 20px;
        }
        
        .header {
            background-color: #000;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 2px solid rgb(184, 197, 187);
        }
        
        .table-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .btn-volver {
            background-color: rgb(0, 0, 0);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .btn-volver:hover {
            background-color: rgb(43, 43, 43);
            color: white;
        }
        
        table {
            border: 2px solid rgb(184, 197, 187);
        }
        
        th {
            background-color: #000;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header text-center">
            <h1>📊 Respuestas Guardadas en MySQL</h1>
            <p>Base de datos: <strong>proyecto_cascos</strong> | Tabla: <strong>encuestas</strong></p>
        </div>
        
        <a href="index.php" class="btn-volver">
            ← Volver al formulario
        </a>
        
        <div class="table-container">
            <h3 class="mb-4">Total de registros: <?php echo $resultado->num_rows; ?></h3>
            
            <?php if ($resultado->num_rows > 0): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Grupo</th>
                            <th>Uso de Casco</th>
                            <th>Certificación</th>
                            <th>Comentario</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($fila = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $fila['id']; ?></td>
                            <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($fila['grupo']); ?></td>
                            <td>
                                <?php 
                                $color = '';
                                switch($fila['usa_casco']) {
                                    case 'Siempre': $color = 'success'; break;
                                    case 'Casi siempre': $color = 'info'; break;
                                    case 'A veces': $color = 'warning'; break;
                                    default: $color = 'danger';
                                }
                                ?>
                                <span class="badge bg-<?php echo $color; ?>">
                                    <?php echo $fila['usa_casco']; ?>
                                </span>
                            </td>
                            <td>
                                <?php 
                                $color_cert = ($fila['certificacion'] == 'Sí') ? 'success' : 'warning';
                                ?>
                                <span class="badge bg-<?php echo $color_cert; ?>">
                                    <?php echo $fila['certificacion']; ?>
                                </span>
                            </td>
                            <td><?php echo htmlspecialchars($fila['comentario'] ?: 'Sin comentario'); ?></td>
                            <td><?php echo date('d/m/Y H:i', strtotime($fila['fecha'])); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
            <div class="alert alert-info">
                No hay encuestas guardadas todavía. ¡Sé el primero en responder!
            </div>
            <?php endif; ?>
            
            <div class="mt-4 p-3 bg-light rounded">
                <h5>🔧 Información técnica:</h5>
                <p><strong>Servidor MySQL:</strong> <?php echo $conexion->host_info; ?></p>
                <p><strong>Base de datos:</strong> proyecto_cascos</p>
                <p><strong>Tabla:</strong> encuestas</p>
                <p><strong>Total de filas:</strong> <?php echo $resultado->num_rows; ?></p>
            </div>
        </div>
        
        <div class="mt-3 text-center">
            <a href="index.php" class="btn btn-dark">Volver al inicio</a>
            <button onclick="window.print()" class="btn btn-secondary">Imprimir reporte</button>
            <a href="database.sql" class="btn btn-outline-dark">Ver script SQL</a>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php require_once 'templates/footer.php'; ?>
    <?php $conexion->close(); ?>
</body>
</html>