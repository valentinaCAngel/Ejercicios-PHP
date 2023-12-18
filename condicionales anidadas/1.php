<!DOCTYPE html>
<html>
<head>
    <title>Asignar Mensaje a la Nota</title>
</head>
<body>
    <h1>Asignar Mensaje a la Nota</h1>
    <form method="post">
        <label for="nota">Nota:</label>
        <input type="number" step="0.01" name="nota" id="nota" required>
        <br>
        <input type="submit" value="Asignar Mensaje">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota = $_POST["nota"];
        
        if ($nota <= 3.4) {
            $mensaje = "Bajo";
        } elseif ($nota <= 4.0) {
            $mensaje = "Básico";
        } elseif ($nota <= 4.6) {
            $mensaje = "Alto";
        } elseif ($nota <= 5.0) {
            $mensaje = "Superior";
        } else {
            $mensaje = "Nota fuera de rango";
        }
        
        echo "<h2>Resultado:</h2>";
        echo "Nota: $nota<br>";
        echo "Mensaje: $mensaje<br>";
    }
    ?>
</body>
</html>
