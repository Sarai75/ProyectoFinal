<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Preguntas Frecuentes - Manejo Responsable de Moto</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light">

    <style>
        body {
            background-color: rgb(88, 25, 25); 
            color: white; 
        }
    
        .accordion-button {
            background-color: rgb(88, 25, 25); 
            color: white;
        }
    
        .accordion-body {
            background-color: rgb(88, 25, 25);
            color: white;
        }
    
        h1 {
            color: rgb(68, 6, 6);
        }
    
        .carousel-caption h3 {
            color: white;
            text-shadow: 0 0 8px black;
        }
    </style>
    </head>
    <body>
    <?php require_once 'templates/barra.php'; ?>
    
        <div id="motoCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
    
                <div class="carousel-item active">
                    <img src="img/moto1.jfif" class="d-block w-100" style="height: 350px; object-fit: cover;" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="fw-bold bg-dark bg-opacity-75 p-2 rounded">"Más vale prevenir que curar"</h3>
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img src="img/moto2.jfif" class="d-block w-100" style="height: 350px; object-fit: cover;" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="fw-bold bg-dark bg-opacity-75 p-2 rounded">“La precaución es el padre de la seguridad”</h3>
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img src="img/moto3.jfif" class="d-block w-100" style="height: 350px; object-fit: cover;" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="fw-bold bg-dark bg-opacity-75 p-2 rounded">“No aprendas por accidente.”</h3>
                    </div>
                </div>
    
            </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#motoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
    
            <button class="carousel-control-next" type="button" data-bs-target="#motoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    

    
    <div class="container">
    
        <h1 class="text-center mb-4 fw-bold">Preguntas Frecuentes</h1>

    <div class="accordion" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q1">
                    ¿Por qué es importante usar casco al manejar moto?
                </button>
            </h2>
            <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                La función principal de un casco es proteger la cabeza y el cerebro del motociclista en caso de un accidente. 
                Absorbe el impacto de una colisión y reduce el riesgo de lesiones graves.
                La mayoría de los cascos semintegrales están equipados con una visera que puede ayudar a mejorar la visibilidad 
                del motociclista al reducir el deslumbramiento y protegerlo del polvo, el viento y otros escombros.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q2">
                    ¿Cada cuánto debo revisar la presión de las llantas?
                </button>
            </h2>
            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Se recomienda revisarla al menos una vez por semana o antes de un viaje largo.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q3">
                    ¿Es necesario usar guantes al conducir?
                </button>
            </h2>
            <div id="q3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Sí, en caso de accidente, las manos son una de las primeras partes del cuerpo en entrar en 
                    contacto con el suelo. Sin guantes, es probable que sufras quemaduras, 
                    cortes o fracturas. Los guantes adecuados reducen significativamente el riesgo de lesiones graves.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q4">
                    ¿Qué mantenimiento básico debo hacer regularmente?
                </button>
            </h2>
            <div id="q4" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Revisión de frenos, aceite, presión de llantas, luces y cadena.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q5">
                    ¿Es seguro manejar moto bajo la lluvia?
                </button>
            </h2>
            <div id="q5" class="accordion-collapse collapse">
                <div class="accordion-body">
                Conducir moto o auto con lluvia durante la temporada de lluvias implica una serie de riesgos que pueden 
                evitarse con precaución y mantenimiento adecuado. El pavimento mojado, la baja visibilidad y las posibles 
                zonas inundadas incrementan las probabilidades de accidentes viales si no se toman las medidas necesarias.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q6">
                    ¿Cuánto debe durar un casco de motociclista?
                </button>
            </h2>
            <div id="q6" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Entre 3 y 5 años según el fabricante, o antes si recibe un golpe fuerte.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q7">
                    ¿Qué ropa es recomendable usar al conducir?
                </button>
            </h2>
            <div id="q7" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Chamarra resistente, pantalón grueso, botas altas y guantes.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q9">
                    ¿Por qué es importante revisar las luces antes de conducir?
                </button>
            </h2>
            <div id="q9" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Porque aumentan tu visibilidad y permiten que otros vehículos te vean.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q10">
                    ¿Qué debo hacer si siento vibración en mi moto?
                </button>
            </h2>
            <div id="q10" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Revisa llantas, suspensión y tornillería; una vibración puede indicar un problema mecánico.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q11">
                    ¿Es necesario usar botas especiales?
                </button>
            </h2>
            <div id="q11" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Sí, evitan lesiones en pies y tobillos en caso de caída. Incorporan protecciones en áreas estratégicas, 
                    como en el tobillo. Permite reducir en gran medida el riesgo de lesiones graves en caso de caída o impacto.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q12">
                    ¿Qué distancia debo mantener al seguir a un vehículo?
                </button>
            </h2>
            <div id="q12" class="accordion-collapse collapse">
                <div class="accordion-body">
                La distancia mínima recomendada varía dependiendo del entorno y las condiciones de la vía. Una regla
                 general comúnmente usada es la de los 3 segundos. Este método consiste en contar tres segundos desde que el 
                 vehículo de delante pasa por un punto fijo hasta pasar por ese mismo punto. Mantenerse dentro de estos parámetros
                garantiza suficiente espacio para reaccionar y frenar en caso de emergencia.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q13">
                    ¿Cómo mejorar mi visibilidad en la noche?
                </button>
            </h2>
            <div id="q13" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Usa ropa reflectante y asegúrate de que tus luces funcionen bien.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-4">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#q15">
                    ¿Cuándo debo cambiar las llantas de mi moto?
                </button>
            </h2>
            <div id="q15" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Cuando el dibujo esté desgastado, tengan grietas o superen los 5 años de uso.
                </div>
            </div>
        </div>

    </div>
</div>
<?php require_once 'templates/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"> </script>

</body>
</html>
