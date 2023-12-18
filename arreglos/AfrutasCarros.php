<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Frutas y Carros</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <label for="frutas">Frutas:</label>
        <input type="text" name="frutas[]" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad[]" required>

        <label for="valor">Valor:</label>
        <input type="number" name="valor[]" required>

        <br>

        <label for="carros">Carros:</label>
        <input type="text" name="carros[]" required>

        <label for="cantidad_carros">Cantidad:</label>
        <input type="number" name="cantidad_carros[]" required>

        <label for="valor_carros">Valor:</label>
        <input type="number" name="valor_carros[]" required>

        <br>

        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frutas = $_POST['frutas'];
        $cantidades = $_POST['cantidad'];
        $valores = $_POST['valor'];

        $carros = $_POST['carros'];
        $cantidades_carros = $_POST['cantidad_carros'];
        $valores_carros = $_POST['valor_carros'];

        // Utilizando un ciclo for para procesar las frutas
        echo "<h2>Frutas:</h2>";
        for ($i = 0; $i < count($frutas); $i++) {
            echo "<p>{$frutas[$i]} - Cantidad: {$cantidades[$i]} - Valor: {$valores[$i]}</p>";
        }

        // Utilizando un ciclo while para procesar los carros
        echo "<h2>Carros:</h2>";
        $j = 0;
        while ($j < count($carros)) {
            echo "<p>{$carros[$j]} - Cantidad: {$cantidades_carros[$j]} - Valor: {$valores_carros[$j]}</p>";
            $j++;
        }
    }
    ?>
</body>
</html>
