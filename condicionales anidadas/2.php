<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con Dos Números</title>
</head>
<body>
    <h1>Operaciones con Dos Números</h1>
    <form method="post">
        <label for="numero1">Primer número:</label>
        <input type="number" name="numero1" id="numero1" required>
        <br>
        <label for="numero2">Segundo número:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br>
        <input type="submit" value="Realizar Operación">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        
        if ($numero1 == $numero2) {
            $resultado = $numero1 * $numero2;
            $operacion = "Multiplicación";
        } elseif ($numero1 > $numero2) {
            $resultado = $numero1 - $numero2;
            $operacion = "Resta";
        } else {
            $resultado = $numero1 + $numero2;
            $operacion = "Suma";
        }
        
        echo "<h2>Resultado:</h2>";
        echo "Primer número: $numero1<br>";
        echo "Segundo número: $numero2<br>";
        echo "Operación realizada: $operacion<br>";
        echo "Resultado: $resultado<br>";
    }
    ?>
</body>
</html>
