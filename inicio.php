<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Bienvenid@</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: rgb(88, 25, 25);
            color: #f0f0f0;
            line-height: 1.6;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: rgb(40, 10, 10);
            padding: 1rem 0;
            border-bottom: 3px solid rgb(184, 197, 187);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
        }
        
        .logo-icon {
            font-size: 2rem;
            color: rgb(184, 197, 187);
        }
        
        /* Menú de navegación */
        .nav-menu {
            display: flex;
            list-style: none;
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .nav-menu li {
            position: relative;
        }
        
        .nav-menu a {
            color: rgb(184, 197, 187);
            text-decoration: none;
            padding: 10px 18px;
            display: block;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
            font-size: 0.95rem;
            border: 1px solid transparent;
        }
        
        .nav-menu a:hover {
            background-color: rgba(184, 197, 187, 0.1);
            border: 1px solid rgb(184, 197, 187);
            color: white;
        }
        
        .nav-menu a.active {
            background-color: rgba(184, 197, 187, 0.2);
            border: 1px solid rgb(184, 197, 187);
            color: white;
        }
        
        .btn-login {
            background-color: rgb(0, 0, 0);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        
        .btn-login:hover {
            background-color: rgb(43, 43, 43);
        }
        
        main {
            padding: 3rem 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 200px);
        }
        
        .welcome-container {
            text-align: center;
            max-width: 800px;
        }
        
        .welcome-message {
            margin-bottom: 2rem;
        }
        
        .welcome-message h1 {
            color: white;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }
        
        .welcome-message p {
            font-size: 1.2rem;
            color: rgb(184, 197, 187);
        }
        
        .login-success {
            background-color: rgba(184, 197, 187, 0.15);
            color: rgb(184, 197, 187);
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid rgb(184, 197, 187);
            margin: 30px 0;
            font-weight: 500;
            font-size: 1.2rem;
        }
        
        footer {
            background-color: rgb(40, 10, 10);
            color: rgb(184, 197, 187);
            text-align: center;
            padding: 1.5rem 0;
            border-top: 2px solid rgb(184, 197, 187);
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        @media (max-width: 992px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-menu {
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            .welcome-message h1 {
                font-size: 2rem;
            }
            
            .nav-menu {
                flex-direction: column;
                align-items: center;
                width: 100%;
            }
            
            .nav-menu li {
                width: 100%;
                text-align: center;
            }
            
            .nav-menu a {
                width: 100%;
                margin-bottom: 5px;
            }
            
            main {
                padding: 2rem 0;
                min-height: calc(100vh - 250px);
            }
        }
        
        @media (max-width: 480px) {
            .welcome-message h1 {
                font-size: 1.8rem;
            }
            
            .welcome-message p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <nav>
                <ul class="nav-menu">
                    <li><a href="Portada.html">Inicio</a></li>
                    <li><a href="index.php" class="active">Bienvenid@</a></li>
                    <li><a href="Accidentes en Motocicleta.html">Accidentes en Motocicleta</a></li>
                    <li><a href="Normativa y Reglamento.html">Normativa</a></li>
                    <li><a href="Practicas Seguras de Conduccion.html">Prácticas Seguras</a></li>
                    <li><a href="Preguntas Frecuentes.html">Preguntas Frecuentes</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="ver_encuestas.php">Encuestas</a></li>
                    <li><a href="index.php">Cascos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="welcome-container">
            <div class="welcome-message">
                <h1>Bienvenido a la página de inicio</h1>
                <p>Sistema de gestión y concienciación sobre seguridad vial</p>
            </div>
            
            <div class="login-success">
                ¡Login exitoso!
            </div>
            
            <p style="color: rgb(184, 197, 187); font-size: 1.1rem;">
                Utiliza el menú de navegación superior para acceder a todas las secciones del sistema.
            </p>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>© 2025 - CBTis 217</p>
            <small>Proyecto realizado con el fin de hacer concientización sobre seguridad vial</small>
        </div>
    </footer>
</body>
</html>