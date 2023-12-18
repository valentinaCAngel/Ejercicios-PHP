<!DOCTYPE html>
<html>
<head>
    <title>Clasificar el Clima</title>
</head>
<body>
    <h1>Clasificar el Clima</h1>
    <form method="post">
        <label for="temperatura">Temperatura en grados Celsius:</label>
        <input type="number" step="0.01" name="temperatura" id="temperatura" required>
        <br>
        <input type="submit" value="Clasificar Clima">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatura = $_POST["temperatura"];
        
        if ($temperatura <= 0) {
            $clima = "Frio";
        } elseif ($temperatura <= 20) {
            $clima = "Templado";
        } elseif ($temperatura <= 30) {
            $clima = "Caluroso";
        } else {
            $clima = "Extremadamente Caluroso";
        }
        
        echo "<h2>Resultado:</h2>";
        echo "Temperatura: " . $temperatura . "°C<br>"; 
        echo "Clima: " . $clima . "<br>"; 
    }
    ?>
</body>
</html>
