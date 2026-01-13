<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Analizador de Temperaturas</title>
</head>
<body>
    <h2>Analizador de Temperaturas</h2>
    <!-- Parte html -->

    <form method="POST">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<label>La temperatura del dia {$i}: ";
            echo "<input type='number' step='0.1' name='temp[]' value='" . (isset($_POST['temp'][$i-1]) ? $_POST['temp'][$i-1] : '') . "' required>";
            echo "</label><br>";
        }
        ?>
        <br>
        <input type="submit" value="Analizar">
    </form>
    <hr>
    <?php
    // Parte php

    if ($_POST && isset($_POST['temp'])) {
        $temps = array_map('floatval', $_POST['temp']);
        $media = array_sum($temps) / count($temps);
        $max = max($temps);
        $min = min($temps);
        echo "<p><strong>La temperatura media ha sido de: " . number_format($media, 1) . "°C.</strong></p>";
        echo "<p>El dia que hacia mas calor era con: <strong>{$max}°C</strong>.</p>";
        echo "<p>El dia con menos calor fue con : <strong>{$min}°C</strong>.</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
