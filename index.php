<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cascos de Moto - Proyecto con Base de Datos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: rgba(88, 25, 25, 1);
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .main-content {
            flex: 1;
        }
        
        .card {
            border-radius: 15px;
            border: 2px solid #b8c5bbff;
            background-color: white;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px #0000001a;
        }
        
        .btn-guardar {
            background-color: #000000ff;
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-guardar:hover {
            background-color: rgb(43, 43, 43);
            transform: scale(1.05);
        }
        
        .header {
            background-color: #000;
            color: white;
            padding: 25px 0;
            text-align: center;
            border-bottom: 4px solid rgb(184, 197, 187);
            width: 100%;
        }
        
        .footer-full {
            background-color: #000;
            color: white;
            padding: 25px 0;
            text-align: center;
            border-top: 3px solid rgb(184, 197, 187);
            width: 100%;
            margin-top: auto;
        }
        
        .nav-custom {
            background-color: #222;
        }
        
        .nav-custom a {
            color: rgb(184, 197, 187);
            font-weight: bold;
        }
        
        .nav-custom a:hover {
            color: white;
            background-color: #444;
        }
        
        .info-box {
            background-color: rgba(184, 197, 187, 0.1);
            border-radius: 10px;
            padding: 15px;
            border-left: 5px solid #dc3545;
            margin-bottom: 15px;
        }
        
        .badge-custom {
            background-color: rgb(88, 25, 25);
            color: white;
        }
        
        .estadistica-box {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            margin: 10px 0;
        }
        
        .numero-grande {
            font-size: 36px;
            font-weight: bold;
            color: rgb(88, 25, 25);
        }
        
        .icono-grande {
            font-size: 40px;
            margin-bottom: 15px;
        }
        
        .texto-destacado {
            background-color: #f86977ff;
            border-left: 5px solid #dc3545;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }
        
        .paso-numero {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: #000;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>PROYECTO: SEGURIDAD CON CASCOS</h1>
        <p class="lead">Concientización sobre el uso correcto del casco</p>
        <span class="badge badge-custom">"RINOS EN MOVIMIENTO: REPONSABILIDAD SOBRE RUEDAS”"</span>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark nav-custom">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#importancia">Importancia</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#certificaciones">Certificaciones</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#encuesta">Encuesta</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#consejos">Consejos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <div class="container mt-4">
            <?php 
            if (isset($_GET['exito']) && $_GET['exito'] == '1') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        ¡Encuesta guardada correctamente en la base de datos!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      </div>';
            }
            ?>
            
            <section id="importancia" class="mb-5">
                <h2 class="text-center text-white mb-4">¿POR QUÉ ES VITAL USAR CASCO?</h2>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="icono-grande text-danger">💀</div>
                                <h4 class="text-danger">Reducción de mortalidad</h4>
                                <p>El uso correcto del casco reduce en un <strong>40%</strong> el riesgo de muerte en accidentes de moto.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="icono-grande text-warning">🏥</div>
                                <h4 class="text-warning">Menos lesiones graves</h4>
                                <p>Disminuye en un <strong>70%</strong> las probabilidades de sufrir traumatismos craneoencefálicos graves.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="icono-grande text-success">💰</div>
                                <h4 class="text-success">Ahorro económico</h4>
                                <p>Un casco certificado cuesta menos del 1% de lo que puede costar una hospitalización por traumatismo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="texto-destacado mt-4">
                    <h5 class="text-danger">DATOS ALARMANTES:</h5>
                    <p>• <strong>9 de cada 10</strong> accidentes fatales involucran a motociclistas sin casco</p>
                    <p>• El <strong>75%</strong> de las lesiones graves en moto son en la cabeza</p>
                    <p>• Un impacto a solo <strong>20 km/h</strong> puede ser mortal sin protección</p>
                </div>
            </section>

            <section id="certificaciones" class="mb-5">
                <h2 class="text-center text-white mb-4">CERTIFICACIONES QUE DEBES CONOCER</h2>
                
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-box h-100">
                                    <h4><span class="badge bg-dark">DOT</span></h4>
                                    <p><strong>Department of Transportation (EE.UU.)</strong></p>
                                    <p>• Estándar mínimo obligatorio</p>
                                    <p>• Pruebas de impacto y penetración</p>
                                    <p>• Etiqueta adhesiva en parte posterior</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="info-box h-100">
                                    <h4><span class="badge bg-primary">ECE</span></h4>
                                    <p><strong>Economic Commission for Europe</strong></p>
                                    <p>• Normativa europea más estricta</p>
                                    <p>• Incluye pruebas de visibilidad nocturna</p>
                                    <p>• Etiqueta circular con letra "E"</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="info-box h-100">
                                    <h4><span class="badge bg-danger">SNELL</span></h4>
                                    <p><strong>Memorial Foundation</strong></p>
                                    <p>• Certificación voluntaria más exigente</p>
                                    <p>• Requerida para competencias</p>
                                    <p>• Estándar más alto de seguridad</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h5 class="text-danger">¿CÓMO VERIFICAR LA CERTIFICACIÓN?</h5>
                            <div class="mt-3">
                                <p><span class="paso-numero">1</span> Busca la etiqueta adhesiva en la parte posterior del casco</p>
                                <p><span class="paso-numero">2</span> Debe mostrar claramente las siglas DOT, ECE o SNELL</p>
                                <p><span class="paso-numero">3</span> Verifica el número de certificación y fecha de fabricación</p>
                                <p><span class="paso-numero">4</span> Revisa que no esté vencido (máximo 5 años de uso)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="encuesta" class="mb-5">
                <h2 class="text-center text-white mb-4">ENCUESTA SOBRE USO DE CASCOS</h2>
                
                <div class="card">
                    <div class="card-body">
                        <form action="guardar.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre completo:</label>
                                        <input type="text" class="form-control" name="nombre" required 
                                               placeholder="Ej: Alice Kei Pérez">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Especialidad:</label>
                                        <input type="text" class="form-control" name="grupo" required 
                                               placeholder="Ej: Programación.">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">¿Con qué frecuencia usas casco?</label>
                                        <select class="form-select" name="usa_casco" required>
                                            <option value="">Selecciona una opción</option>
                                            <option value="Siempre">Siempre ✅</option>
                                            <option value="Casi siempre">Casi siempre 👍</option>
                                            <option value="A veces">A veces 🤔</option>
                                            <option value="Rara vez">Rara vez ⚠️</option>
                                            <option value="Nunca">Nunca ❌</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">¿Tu casco tiene certificación?</label>
                                        <select class="form-select" name="certificacion" required>
                                            <option value="">Selecciona</option>
                                            <option value="Sí">Sí, está certificado ✅</option>
                                            <option value="No">No tiene certificación ❌</option>
                                            <option value="No sé">No sé si tiene 🤔</option>
                                            <option value="No tengo">No tengo casco 🏍️</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Comentario o sugerencia (opcional):</label>
                                <textarea class="form-control" name="comentario" rows="3" 
                                          placeholder="¿Qué opinas sobre el uso del casco? ¿Alguna sugerencia para mejorar la seguridad vial?"></textarea>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-guardar">
                                    💾 Guardar encuesta
                                </button>
                                <button type="reset" class="btn btn-outline-secondary ms-2">
                                    🗑️ Limpiar formulario
                                </button>
                            </div>
                            
                            <div class="mt-3 text-center">
                                <small class="text-muted">
                                    Se honest@ con tus respuestas
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section id="consejos" class="mb-5">
                <h2 class="text-center text-white mb-4">CONSEJOS PRÁCTICOS</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="text-success">✅ LO QUE SÍ DEBES HACER:</h5>
                                <ul class="mt-3">
                                    <li><strong>Verifica talla:</strong> El casco debe quedar ajustado sin apretar</li>
                                    <li><strong>Correa segura:</strong> Debe pasar bajo la barbilla, con espacio para un dedo</li>
                                    <li><strong>Visor limpio:</strong> Mantén el visor sin rayaduras para buena visibilidad</li>
                                    <li><strong>Renovación:</strong> Cambia el casco cada 5 años o después de un impacto</li>
                                    <li><strong>Almacenamiento:</strong> Guarda en lugar fresco, seco y alejado del sol</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="text-danger">❌ LO QUE NO DEBES HACER:</h5>
                                <ul class="mt-3">
                                    <li><strong>Comprar usado:</strong> Nunca compres casco de segunda mano</li>
                                    <li><strong>Ignorar daños:</strong> Si se cae o golpea, cámbialo aunque no se vea dañado</li>
                                    <li><strong>Modificar:</strong> No hagas agujeros ni modifiques la estructura</li>
                                    <li><strong>Usar sin correa:</strong> Nunca uses el casco sin abrochar la correa</li>
                                    <li><strong>Ignorar vencimiento:</strong> Los materiales se degradan con el tiempo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="text-center text-primary">CICLO DE VIDA DE UN CASCO</h5>
                        <div class="row text-center mt-3">
                            <div class="col-md-3">
                                <div class="p-3 border rounded">
                                    <h6>Año 0-1</h6>
                                    <p>Óptimo rendimiento</p>
                                    <span class="badge bg-success">Nuevo</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 border rounded">
                                    <h6>Año 2-3</h6>
                                    <p>Buen estado</p>
                                    <span class="badge bg-info">Regular</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 border rounded">
                                    <h6>Año 4-5</h6>
                                    <p>Límite de uso</p>
                                    <span class="badge bg-warning">Renovar</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 border rounded">
                                    <h6>Año 5+</h6>
                                    <p>Peligroso usar</p>
                                    <span class="badge bg-danger">Cambiar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div> 

    <div class="footer-full">
        <div class="container">
            <h4>"TU CABEZA VALE MÁS QUE CUALQUIER CASCO"</h4>
            <p><strong>"RINOS EN MOVIMIENTO: RESPONSABILIDAD SOBRE RUEDAS"</strong></p>
            <p>© 2025 - CBTis 217</p>
            <small>Proyecto realizado con el fin de hacer concientización sobre seguridad vial</small>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId !== '#') {
                    const target = document.querySelector(targetId);
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 70,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Proyecto escolar: Seguridad con Cascos');
            console.log('Información educativa sobre uso correcto del casco');
            console.log('Base de datos MySQL: cascos.encuestas');
        });
        
        window.addEventListener('scroll', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                if (cardTop < windowHeight - 100) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });
    </script>
</body>
</html>