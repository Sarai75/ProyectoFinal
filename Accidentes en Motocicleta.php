<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accidentes en Motocicleta - México</title>
  <link rel="stylesheet" href="Css/bootstrap.min.css">
  <style>
    body { background-color: #f8f9fa; }
    header, footer { background-color: rgb(88, 25, 25); color: white; text-align: center; }
    header { padding: 2rem; }
    footer { padding: 1rem; margin-top: 2rem; }
    h2 { margin-top: 2rem; color: rgb(88, 25, 25); }
    article { background-color: white; padding: 1rem; margin-bottom: 1.5rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    .icono { font-size: 2rem; color: rgb(88, 25, 25); margin-right: 0.5rem; }
    section ul { padding-left: 1.2rem; }
    .carousel-margin { margin-top: 2rem; margin-bottom: 2rem; }
  </style>
</head>
<body>
<?php require_once 'templates/barra.php'; ?>
  <header>
    <h1 class="display-6">Accidentes en Motocicleta</h1>
    <p class="lead">Información nacional sobre causas, estadísticas y riesgos</p>
  </header>

  <main class="container mt-4">

    <br><br>

    <section>
      <article>
        <h5><span class="icono"></span>Magnitud del problema</h5>
        <p>De acuerdo con la Organización Mundial de la Salud (OMS), los accidentes de tránsito causan 1.2 millones de defunciones anuales y representan la principal 
            causa de muerte entre jóvenes de 15 a 29 años en todo el mundo.En el ámbito municipal de Uriangato,Gto,  la cultura vial se centra en la prevención urgente de accidentes,
             siendo el principal desafío el alto índice de siniestralidad protagonizado por motociclistas jóvenes (15 a 35), lo cual está intrínsecamente ligado a la falta de educación
             vial y el incumplimiento de normas como el exceso de velocidad y el uso inadecuado del casco</p>
        <p>En México, ciclistas, peatones y motociclistas concentran el <strong>60%</strong> de las muertes por tránsito (INSP).</p>
      </article>

      <article>
        <h5><span class="icono"></span>Estadísticas nacionales</h5>
        <p>En 2022, el INEGI reportó un total de 374,949 accidentes de tránsito en zonas urbanas y suburbanas de México, de los cuales una proporción significativa involucró 
            motocicletas. Esta cifra representa un aumento respecto a años anteriores, reflejando una creciente preocupación por la seguridad vial. Los estados con mayor incidencia 
            fueron Ciudad de México, Jalisco y Nuevo León, y entre las causas más comunes destacan el exceso de velocidad, el uso del celular al conducir y la conducción bajo efectos 
            del alcohol. Además, muchos de estos accidentes resultaron en lesiones graves o incluso muertes, afectando principalmente a jóvenes entre 18 y 35 años. El impacto económico 
            es considerable, incluyendo gastos médicos, daños materiales y pérdidas laborales. Ante esta situación, se han impulsado campañas de concientización, operativos de tránsito 
            y recomendaciones específicas para motociclistas, como el uso obligatorio de casco, ropa reflectante y respeto a las normas de circulación.</p>
      </article>

      <div class="carousel slide carousel-fade carousel-margin" id="carouselExampleFade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <article>
        <h5><span class="icono"></span>Principales causas</h5>
        <ul>
          <li>Exceso de velocidad</li>
          <li>Alcohol o drogas</li>
          <li>Falta de casco</li>
          <li>Maniobras riesgosas</li>
          <li>No emplear medios de sujeción para los niños</li>
        </ul>
      </article>

      <article>
        <h5><span class="icono">🩺</span>Lesiones más comunes</h5>
        <ul>
          <li>Traumatismo craneoencefálico: Lesión en la cabeza que afecta al cerebro. Puede ocurrir cuando alguien se golpea fuerte contra el suelo o un objeto. 
            Sus consecuencias van desde mareos y pérdida de memoria hasta problemas graves si no se usa casco.</li>
          <li>Fracturas en extremidades: huesos rotos en brazos o piernas. En motociclistas son muy frecuentes porque al caer suelen usar las manos para protegerse
             o las piernas reciben el impacto directo.</li>
          <li>Lesiones torácicas y abdominales: Pueden afectar órganos internos como pulmones, hígado o intestinos, y ocurren cuando el cuerpo recibe un golpe fuerte
             contra el manubrio, el tanque de la moto o el pavimento.</li>
        </ul>
        <p class="text-muted">(Fuente: ANMM)</p>
      </article>
    </section>

  </main>

  <?php require_once 'templates/footer.php'; ?>
  <script src="Js/bootstrap.bundle.min.js"></script>
</body>
</html>