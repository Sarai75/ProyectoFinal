<?php

?>

<style>
    .footer-full {
        background-color: rgb(40, 10, 10);
        color: rgb(184, 197, 187);
        padding: 15px 0;
        border-top: 2px solid rgb(184, 197, 187);
        text-align: center;
        transition: background-color 0.3s ease, color 0.3s ease;
        font-size: 0.9rem;
    }

    .footer-full:hover {
        background-color: rgb(50, 15, 15);
        color: #ffffff;
    }

    .footer-full h4 {
        margin-bottom: 5px;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .footer-full p {
        margin: 3px 0;
        font-size: 0.85rem;
    }

    .footer-full small {
        display: block;
        margin-top: 4px;
        font-size: 0.75rem;
        color: rgb(200, 200, 200);
        transition: color 0.3s ease;
    }

    .footer-full:hover small {
        color: #ffffff;
    }

    @media (max-width: 768px) {
        .footer-full h4 {
            font-size: 1rem;
        }

        .footer-full p {
            font-size: 0.8rem;
        }

        .footer-full small {
            font-size: 0.7rem;
        }
    }
</style>

<footer class="footer-full">
    <div class="container">
        <h4>TU CABEZA VALE MÁS QUE CUALQUIER CASCO</h4>
        <p><strong>RINOS EN MOVIMIENTO: RESPONSABILIDAD SOBRE RUEDAS</strong></p>
        <p>© 2025 - CBTis 217</p>
        <small>Proyecto realizado con el fin de hacer concientización sobre seguridad vial</small>
        <small>Fuentes: INSP, INEGI, OMS, ANMM</small>
    </div>
</footer>