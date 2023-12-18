<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Números</title>
</head>
<body>
    <h1>Imprimir Números</h1>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <br>
        <input type="submit" value="Imprimir Números">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        if ($numero < 1) {
            echo "Por favor, ingrese un número positivo.";
        } else {
            echo "<h2>Números del 1 al $numero:</h2>";
            for ($i = 1; $i <= $numero; $i++) {
                echo $i . "<br>";
            }
        }
    }
    ?>
</body>
</html>
