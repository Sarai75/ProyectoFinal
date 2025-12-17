<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Normativa y Reglamento Vial en Motocicletas - México</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    header, footer { background-color: rgb(88, 25, 25); color: white; }
    header { padding: 2rem 1rem; text-align: center; }
    footer { padding: 1rem; text-align: center; margin-top: 2rem; }
    h2 { margin-top: 2rem; color: rgb(88, 25, 25); }
    .card { border: none; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    .card-header { background-color: #212529; color: white; font-weight: bold; }
    .list-group-item { border: none; border-bottom: 1px solid #dee2e6; }
  </style>
</head>
<body>

  <header>
    <div class="container">
      <h1 class="display-6">Normativa y Reglamento Vial en Motocicletas</h1>
      <p class="lead">Obligaciones como motociclista para circular seguro y legalmente</p>
    </div>
  </header>
  <?php require_once 'templates/barra.php'; ?>
  <main class="container mt-4">

    <h2>Obligaciones básicas</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Uso del casco</div>
          <div class="card-body">
            <p>El casco certificado es obligatorio para conductor y acompañante. Su incumplimiento genera multas y retención del vehículo.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Seguro obligatorio</div>
          <div class="card-body">
            <p>Todo motociclista debe contar con un seguro de responsabilidad civil vigente que cubra daños a terceros.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Límites de velocidad</div>
          <div class="card-body">
            <p>Respetar los límites de velocidad es obligatorio. En zonas urbanas suele ser de 50 km/h.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Documentación vigente</div>
          <div class="card-body">
            <p>Licencia, tarjeta de circulación y seguro deben portarse siempre. Su ausencia puede generar sanciones.</p>
          </div>
        </div>
      </div>
    </div>

    <h2>Normas de circulación</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Respeto a carriles</div>
          <div class="card-body">
            <p>Las motocicletas deben circular en un solo carril, evitando zigzaguear o maniobras peligrosas.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Pasajeros</div>
          <div class="card-body">
            <p>Solo se permite un pasajero con casco. Está prohibido transportar menores de 12 años.</p>
          </div>
        </div>
      </div>
    </div>

    <h2>Reglas adicionales</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Velocidad</div>
          <div class="card-body">
            <p>Los motociclistas deben respetar los límites de velocidad establecidos en cada vía.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Alcohol y drogas</div>
          <div class="card-body">
            <p>Está prohibido conducir bajo efectos de alcohol o drogas. Las sanciones incluyen multas y suspensión de licencia.</p>
          </div>
        </div>
      </div>
    </div>

    <h2>Multas y sanciones</h2>
    <ul class="list-group">
      <li class="list-group-item">No usar casco: desde $1,500 MXN y retención de la moto.</li>
      <li class="list-group-item">Circular en banquetas o ciclovías: hasta $2,000 MXN.</li>
      <li class="list-group-item">Transportar menores: $1,800 MXN.</li>
      <li class="list-group-item">No contar con seguro: $2,000 MXN y posible inmovilización.</li>
      <li class="list-group-item">No portar licencia: más de $2,500 MXN y posible retención.</li>
      <li class="list-group-item">No portar tarjeta de circulación: $1,800 MXN.</li>
      <li class="list-group-item">Exceso de velocidad: desde $1,500 MXN.</li>
      <li class="list-group-item">No respetar semáforos: hasta $2,000 MXN.</li>
      <li class="list-group-item">Usar celular al conducir: $1,500 MXN.</li>
      <li class="list-group-item">Maniobras peligrosas: $2,500 MXN o más.</li>
    </ul>

  </main>

  <?php require_once 'templates/footer.php'; ?>
</body>
</html>