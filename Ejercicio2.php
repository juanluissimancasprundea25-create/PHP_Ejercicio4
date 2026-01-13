<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Piedra, Papel o Tijera</title>
</head>
<body>
    <h2>Piedra, Papel o Tijera</h2>
    <!--Parte en html-->


    <form method="POST">
        <label><input type="radio" name="jugador" value="Piedra" required> Piedra</label><br>
        <label><input type="radio" name="jugador" value="Papel"> Papel</label><br>
        <label><input type="radio" name="jugador" value="Tijera"> Tijera</label><br><br>
        <input type="submit" value="Jugar">
    </form>
    <hr>
    <?php
    //Parte en php

    if ($_POST && isset($_POST['jugador'])) {
        $opciones = ["Piedra", "Papel", "Tijera"];
        $jugador = $_POST['jugador'];
        $cpu = $opciones[rand(0, 2)];
        // Parte del reto con emojis

        $emojis = ["Piedra" => "🪨", "Papel" => "📄", "Tijera" => "✂️"];
        echo "<p>Has elegido: <strong>{$jugador} {$emojis[$jugador]}</strong></p>";
        echo "<p>La CPU eligio: <strong>{$cpu} {$emojis[$cpu]}</strong></p>";
        if ($jugador === $cpu) {
            $resultado = "Es un empate";
        } elseif (
            ($jugador === "Piedra" && $cpu === "Tijera") ||
            ($jugador === "Papel" && $cpu === "Piedra") ||
            ($jugador === "Tijera" && $cpu === "Papel")
        ) {
            $resultado = "Has ganado";
        } else {
            $resultado = "Has perdido";
        }
        echo "<h3>{$resultado}</h3>";
    }
    ?>
</body>
</html>
