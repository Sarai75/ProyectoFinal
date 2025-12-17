<?php

?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header {
        background-color: rgb(40, 10, 10);
        border-bottom: 3px solid rgb(184, 197, 187);
        width: 100%;
    }

    .headercc {
        max-width: 1200px;
        margin: 0 auto;
        padding: 14px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 8px;
        flex-wrap: nowrap;
        align-items: center;
    }

    .nav-menu li {
        display: flex;
        align-items: center;
        white-space: nowrap;
    }

    .nav-menu a {
        color: rgb(184, 197, 187);
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 10px;
        font-size: 0.95rem;
        font-weight: 500;
        border: 1px solid transparent;

        transition:
            background-color 0.3s ease,
            color 0.3s ease,
            transform 0.2s ease,
            box-shadow 0.2s ease,
            border-color 0.3s ease;
    }

    .nav-menu a:hover {
        background-color: rgba(184, 197, 187, 0.15);
        border-color: rgb(184, 197, 187);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
    }

    @media (max-width: 900px) {
        .header-content {
            overflow-x: auto;
        }

        .nav-menu {
            padding-bottom: 5px;
        }
    }
</style>

<header>
    <div class="headercc">
        <nav>
            <ul class="nav-menu">
                <li><a href="Portada.php">Inicio</a></li>
                <li><a href="PracSegurasConduccion.php">Prácticas Seguras</a></li>
                <li><a href="crudcas.php">Cascos</a></li>
                <li><a href="Normativa y Reglamento.php">Normativa</a></li>
                <li><a href="Accidentes en Motocicleta.php">Accidentes</a></li>
                <li><a href="Preguntas Frecuentes.php">Preguntas</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="index.php">Cascos</a></li>
                <li><a href="ver_encuestas.php">Encuestas</a></li>
                <li><a href="login1.php">Login</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
    </div>
</header>
