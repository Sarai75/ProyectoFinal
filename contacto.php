<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php require_once 'templates/barra.php'; ?>

<h2>Formulario de Contacto</h2>

<form action="compromiso.php" method="POST">

    <label>Nombre</label>
    <input type="text" name="nombre" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Teléfono</label>
    <input type="text" name="telefono">

    <label>Mensaje</label>
    <textarea name="mensaje"></textarea>

    <label class="check">
        <input type="checkbox" name="acepta">
        Acepto el compromiso de conducción segura
    </label>

    <button type="submit">Enviar</button>
</form>
<?php require_once 'templates/footer.php'; ?>
</body>
</html>
