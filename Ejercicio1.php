<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Maquina de Cambio</title>
</head>
<body>
    <!-- Parte html -->

    <h2>La Maquina de Cambio</h2>
    <form method="POST">
        <label>Cantidad en euros:
            <input type="number" name="cantidad" min="1" value="<?php echo isset($_POST['cantidad']) ? (int)$_POST['cantidad'] : 0; ?>" required>
        </label><br><br>
        <input type="submit" value="Desglosar">
    </form>
    <hr>
    <?php
    // Parte php

    if ($_POST) {
        $cantidad = (int)($_POST['cantidad'] ?? 0);
        if ($cantidad <= 0) {
            echo "<p>Los euros tienen que estar en positivo</p>";
        } else {
            $billetes = [50, 20, 10, 5];
            $resto = $cantidad;
            $resultado = [];
            foreach ($billetes as $valor) {
                $num = floor($resto / $valor);
                if ($num > 0) {
                    $resultado[] = "{$num} de {$valor}€";
                    $resto = $resto % $valor;
                }
            }
            if ($resto > 0) {
                $resultado[] = "{$resto} monedas de 1€";
            }
            echo "<p>Para {$cantidad}€ necesitas: " . implode(', ', $resultado) . ".</p>";
        }
    }
    ?>
</body>
</html>
