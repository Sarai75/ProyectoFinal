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
        
        .welc {
            text-align: center;
            max-width: 800px;
        }
        
        .welme {
            margin-bottom: 2rem;
        }
        
        .welme h1 {
            color: white;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }
        
        .welme p {
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
        
        @media (max-width: 480px) {
            .welme h1 {
                font-size: 1.8rem;
            }
            
            .welme p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <?php require_once 'templates/barra.php'; ?>

    <main class="container">
        <div class="welc">
            <div class="welme">
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

    <?php require_once 'templates/footer.php'; ?>
</body>
</html>