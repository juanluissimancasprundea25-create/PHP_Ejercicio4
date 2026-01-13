<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Emails Corporativos</title>
</head>
<body>
    <h2>Generador de Emails Corporativos</h2>
    <!-- Parte html -->

    <form method="POST">
        <label>Nombre:
            <input type="text" name="nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" required>
        </label><br><br>
        <label>Apellido:
            <input type="text" name="apellido" value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>" required>
        </label><br><br>
        <label>Dominio:
            <input type="text" name="dominio" value="<?php echo isset($_POST['dominio']) ? htmlspecialchars($_POST['dominio']) : ''; ?>" required>
        </label><br><br>
        <input type="submit" value="Generar Email">
    </form>
    <hr>
    <?php
    // Parte php

    if ($_POST) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $dominio = trim($_POST['dominio']);
        $email = strtolower(substr($nombre, 0, 1) . $apellido . '@' . $dominio);
        echo "<p><strong>Tu nuevo correo es: {$email}</strong></p>";
    }
    ?>
</body>
</html>
