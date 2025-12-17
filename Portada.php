<?php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenida - Rinos en Movimiento</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            color: white;
            background-color: rgb(88, 25, 25);
        }

        .bg-img {
            position: fixed;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .tarjeta {
            border-radius: 15px;
            border: 2px solid rgb(184, 197, 187);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(3px);
        }

        .btn-login {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(3px);
            border: 2px solid rgb(184, 197, 187);
            border-radius: 15px;
            color: white;
            padding: 6px 25px;
        }

        .btn-login:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .card {
            border-radius: 15px;
            border: 2px solid rgb(184, 197, 187);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(3px);
            margin-bottom: 20px;
        }

        .card-body {
            color: white;
            padding: 25px;
        }

        .card h4 {
            color: white;
            font-weight: bold;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card h5 {
            color: #dc3545;
            font-weight: bold;
            margin-bottom: 15px;
            border-left: 3px solid #dc3545;
            padding-left: 10px;
        }

        .card ul {
            padding-left: 20px;
        }

        .card ul li {
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.9);
        }

        .card ul li:before {
            content: "✓";
            color: #dc3545;
            font-weight: bold;
            margin-right: 10px;
        }

        .badge {
            font-size: 0.9rem;
            padding: 8px 12px;
            margin: 3px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .badge.bg-primary {
            background-color: rgba(13, 110, 253, 0.8) !important;
        }

        .badge.bg-success {
            background-color: rgba(25, 135, 84, 0.8) !important;
        }

        .badge.bg-info {
            background-color: rgba(13, 202, 240, 0.8) !important;
        }

        .badge.bg-warning {
            background-color: rgba(255, 193, 7, 0.8) !important;
        }

        .badge.bg-danger {
            background-color: rgba(220, 53, 69, 0.8) !important;
        }

        .badge.bg-dark {
            background-color: rgba(33, 37, 41, 0.8) !important;
        }

        .bg-light {
            background-color: rgba(255, 255, 255, 0.15) !important;
            color: white !important;
            border: 1px solid rgb(184, 197, 187);
        }

        .bg-light p {
            color: white !important;
            margin-bottom: 8px;
        }

        .bg-light strong {
            color: #dc3545;
        }
       
        @media (max-width: 768px) {
            .card-body {
                padding: 15px;
            }

            .card h4 {
                font-size: 1.5rem;
            }

            .card h5 {
                font-size: 1.2rem;
            }

            .footer {
                padding: 20px 0;
            }
        }
    </style>
</head>

<body>
    <img class="bg-img" src="mootos.png" alt="Fondo">
    <div class="py-3" style="background-color: rgb(88, 25, 25);">
        <div class="text-center mb-3">
            <h2 class="fw-bold text-white">
                PROYECTO “RINOS EN MOVIMIENTO: RESPONSABILIDAD SOBRE RUEDAS”
            </h2>
            <p class="m-0 text-white">Responsabilidad sobre ruedas</p>
        </div>
    </div>
    <br>
    <p style="font-size: 32px;">  </p>

    <div class="row g-5 justify-content-center d-flex align-items-center">
        <div class="col-md-3">
            <div class="tarjeta p-2 h-100 shadow" style="text-align: justify;">
                <h5 class="fw-bold mb-1">Presentación</h5>
                <p class="small m-0">
                    Este proyecto del CBTis 217 busca que todos aprendamos a
                    movernos de forma más segura cuando usamos una motocicleta.
                    Queremos que los estudiantes conozcan los riesgos que existen
                    y la importancia de cuidarse al conducir. A través de información
                    clara, iremos viendo temas como protección para manejar, precaución
                    al manejar y cómo tomar decisiones más seguras todos los días.
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="tarjeta p-2 h-100 shadow" style="text-align: justify;">
                <h5 class="fw-bold mb-1">Objetivo</h5>
                <p class="small m-0">
                    El objetivo es ayudar a que los alumnos desarrollen hábitos de
                    manejo responsable. Veremos las normas de tránsito básicas, la importancia de
                    usar el casco correcto y cómo prevenir accidentes. La idea es que cada estudiante
                    vea los riesgos más comunes y entienda cómo pequeñas acciones pueden proteger su
                    vida y la de los demás. Buscamos formar conductores que valoren su seguridad en
                    cada recorrido.
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="tarjeta p-2 h-100 shadow" style="text-align: justify;">
                <h5 class="fw-bold mb-1">Mensaje</h5>
                <p class="small m-0">
                    Conducir con cuidado es una forma de cuidarte a ti mismo y también a quienes
                    te rodean. Usar casco, respetar las señales, estar atento y no confiarse puede
                    evitar accidentes graves. Cada estudiante del CBTis 217 puede aportar a una
                    cultura vial más segura, donde todos nos movamos de manera responsable y regresemos
                    a casa sin riesgos. La precaución no cuesta nada, pero puede salvarlo todo.
                </p>
            </div>
        </div>
    </div>

    <section class="mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="text-center">MÁS COBRE EL PROYECTO</h4>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>OBJETIVOS LOGRADOS:</h5>
                        <ul>
                            <li>Crear conciencia sobre seguridad vial</li>
                            <li>Difundir información sobre certificaciones</li>
                            <li>Demostrar funcionamiento de PHP + MySQL</li>
                            <li>Crear sistema web educativo funcional</li>
                            <li>Fomentar el uso correcto del casco</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h5>TECNOLOGÍAS UTILIZADAS:</h5>
                        <div class="mt-2">
                            <span class="badge bg-primary">PHP</span>
                            <span class="badge bg-success">MySQL</span>
                            <span class="badge bg-info">Bootstrap</span>
                            <span class="badge bg-warning">HTML</span>
                            <span class="badge bg-danger">CSS</span>
                            <span class="badge bg-dark">JavaScript</span>
                        </div>
                        <div class="mt-3">
                            <p><strong>Base de datos:</strong> cascos</p>
                            <p><strong>Tabla:</strong> encuestas</p>
                            <p><strong>Servidor:</strong> XAMPP (Apache + MySQL)</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center p-3 bg-light rounded">
                    <p><strong>Integrantes:</strong> Melisa, Dulce, Margarita, Sarai, Ariana</p>
                    <p><strong>Materia:</strong> Implementa aplicaciones web / Construye Aplicaciones Web</p>
                    <p><strong>Profesor:</strong> Luis Germán Gutiérrez Torres / Gabriela Anayeli Hernández Jiménez</p>
                    <p><strong>Fecha de entrega:</strong>15/12/2025</p>
                </div>
            </div>
        </div>
    </section>
    </div>

    <p style="font-size: 8px;">  </p>
    <div class="fw-bold text-center mt-3 d-flex justify-content-center align-items-center">
        <a href="PracSegurasConduccion.php" class="btn btn-login shadow">Comenzar</a>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>