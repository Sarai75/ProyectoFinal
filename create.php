<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Casco - CRUD</title>
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
                                <i class="bi bi-shield-plus"></i> 
                                Agregar Nuevo Casco
                            </h3>
                            <a href="crudcas.php" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-arrow-left"></i> Volver
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="save.php" method="POST" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="modelo" class="form-label fw-bold">Modelo *</label>
                                    <input type="text" class="form-control form-control-custom" 
                                           id="modelo" name="modelo" 
                                           placeholder="Ej: RX-7, X14, K6" required>
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="marca" class="form-label fw-bold">Marca *</label>
                                    <select class="form-select form-control-custom" 
                                            id="marca" name="marca" required>
                                        <option value="">Seleccionar marca...</option>
                                        <option value="Shoei">Shoei</option>
                                        <option value="Arai">Arai</option>
                                        <option value="AGV">AGV</option>
                                        <option value="HJC">HJC</option>
                                        <option value="Bell">Bell</option>
                                        <option value="Nolan">Nolan</option>
                                        <option value="LS2">LS2</option>
                                        <option value="MT">MT</option>
                                    </select>
                                    <div class="invalid-feedback">Selecciona una marca.</div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="talla" class="form-label fw-bold">Talla *</label>
                                    <select class="form-select form-control-custom" 
                                            id="talla" name="talla" required>
                                        <option value="">Seleccionar...</option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M" selected>M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="color" class="form-label fw-bold">Color</label>
                                    <input type="text" class="form-control form-control-custom" 
                                           id="color" name="color" 
                                           placeholder="Ej: Negro, Rojo/Blanco">
                                </div>
                                
                            <div class="mt-4 pt-3 border-top">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="index.php" class="btn btn-secondary">
                                            <i class="bi bi-x-circle"></i> Cancelar
                                        </a>
                                    </div>
                                    <div>
                                        <button type="reset" class="btn btn-warning me-2">
                                            <i class="bi bi-arrow-clockwise"></i> Limpiar
                                        </button>
                                        <button type="submit" class="btn btn-custom">
                                            <i class="bi bi-save"></i> Guardar Casco
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
    <script src="../js/bootstrap.bundle.min.js"></script>
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