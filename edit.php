<?php
include 'db.php';
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("<div class='alert alert-danger'>ID no especificado</div>");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM cascos WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("<div class='alert alert-danger'>Casco no encontrado</div>");
}

$casco = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Casco #<?php echo $casco['id']; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header card-header-custom">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">
                                <i class="bi bi-pencil-square"></i> 
                                Editar Casco: <?php echo htmlspecialchars($casco['modelo']); ?>
                            </h3>
                            <a href="crudcas.php" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-arrow-left"></i> Volver
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="alert alert-info">
                            <h5><i class="bi bi-info-circle"></i> Información Actual</h5>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <small>ID:</small>
                                    <p class="fw-bold">#<?php echo $casco['id']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <small>Fecha creación:</small>
                                    <p class="fw-bold"><?php echo date('d/m/Y', strtotime($casco['fecha_creacion'])); ?></p>
                                </div>
                                <div class="col-md-4">
                                    <small>Valor actual:</small>
                                    <p class="fw-bold text-success">$<?php echo number_format($casco['precio'], 2); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <form action="update.php" method="POST" class="needs-validation" novalidate>
                            <input type="hidden" name="id" value="<?php echo $casco['id']; ?>">
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Modelo *</label>
                                    <input type="text" class="form-control form-control-custom" 
                                           name="modelo" value="<?php echo htmlspecialchars($casco['modelo']); ?>" 
                                           required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Marca *</label>
                                    <select class="form-select form-control-custom" name="marca" required>
                                        <option value="Shoei" <?php echo $casco['marca']=='Shoei'?'selected':''; ?>>Shoei</option>
                                        <option value="Arai" <?php echo $casco['marca']=='Arai'?'selected':''; ?>>Arai</option>
                                        <option value="AGV" <?php echo $casco['marca']=='AGV'?'selected':''; ?>>AGV</option>
                                        <option value="HJC" <?php echo $casco['marca']=='HJC'?'selected':''; ?>>HJC</option>
                                        <option value="Bell" <?php echo $casco['marca']=='Bell'?'selected':''; ?>>Bell</option>
                                        <option value="Nolan" <?php echo $casco['marca']=='Nolan'?'selected':''; ?>>Nolan</option>
                                        <option value="LS2" <?php echo $casco['marca']=='LS2'?'selected':''; ?>>LS2</option>
                                        <option value="MT" <?php echo $casco['marca']=='MT'?'selected':''; ?>>MT</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Talla *</label>
                                    <select class="form-select form-control-custom" name="talla" required>
                                        <option value="XS" <?php echo $casco['talla']=='XS'?'selected':''; ?>>XS</option>
                                        <option value="S" <?php echo $casco['talla']=='S'?'selected':''; ?>>S</option>
                                        <option value="M" <?php echo $casco['talla']=='M'?'selected':''; ?>>M</option>
                                        <option value="L" <?php echo $casco['talla']=='L'?'selected':''; ?>>L</option>
                                        <option value="XL" <?php echo $casco['talla']=='XL'?'selected':''; ?>>XL</option>
                                        <option value="XXL" <?php echo $casco['talla']=='XXL'?'selected':''; ?>>XXL</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Color</label>
                                    <input type="text" class="form-control form-control-custom" 
                                           name="color" value="<?php echo htmlspecialchars($casco['color']); ?>">
                                </div>
                
                            <div class="mt-4 pt-3 border-top">
                                <div class="d-flex justify-content-between">
                                    <a href="crudcas.php" class="btn btn-secondary">
                                        <i class="bi bi-x-circle"></i> Cancelar
                                    </a>
                                    <div>
                                        <button type="reset" class="btn btn-warning me-2">
                                            <i class="bi bi-arrow-clockwise"></i> Restaurar
                                        </button>
                                        <button type="submit" class="btn btn-custom">
                                            <i class="bi bi-check-circle"></i> Actualizar Casco
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        
    </script>
</body>
</html>
<?php $conexion->close(); ?>