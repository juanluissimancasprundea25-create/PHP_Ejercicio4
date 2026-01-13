<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Piramide de Mario</title>
</head>
<body>
    <h2>La Piramide de Mario</h2>
    <!-- Parte html -->

    <form method="POST">
        <label>Altura:
            <input type="number" name="altura" min="1" max="10" value="<?php echo isset($_POST['altura']) ? (int)$_POST['altura'] : 5; ?>" required>
        </label><br><br>
        <input type="submit" value="Construir Pirámide">
    </form>
    <hr>
    <?php
    //Parte php

    if ($_POST) {
        $altura = (int)($_POST['altura'] ?? 5);
        $altura = max(1, min(10, $altura));
        for ($fila = 1; $fila <= $altura; $fila++) {
            for ($col = 1; $col <= $fila; $col++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
