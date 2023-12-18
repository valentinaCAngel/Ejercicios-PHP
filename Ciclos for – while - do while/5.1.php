<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    <form method="post">
        <label for="numero">Ingrese un número para la tabla de multiplicar:</label>
        <input type="number" name="numero" id="numero" required>
        <br>
        <input type="submit" value="Generar Tabla">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        echo "<h2>Tabla de Multiplicar del $numero</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Número</th><th>Resultado</th></tr>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>
