<!DOCTYPE html>
<html>
<head>
    <title>Calcular Total a Pagar</title>
</head>
<body>
    <h1>Calcular Total a Pagar por Camisas</h1>
    <form method="post">
        <label for="cantidad">Cantidad de camisas:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <br>
        <label for="precio_unitario">Precio unitario por camisa:</label>
        <input type="number" step="0.01" name="precio_unitario" id="precio_unitario" required>
        <br>
        <input type="submit" value="Calcular Total a Pagar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $precio_unitario = $_POST["precio_unitario"];
        
        $total_sin_descuento = $cantidad * $precio_unitario;
        
        if ($cantidad >= 3) {
            $descuento = 0.20; 
        } else {
            $descuento = 0.10; 
        }
        
        $total_con_descuento = $total_sin_descuento - ($total_sin_descuento * $descuento);
        
        echo "<h2>Resultados:</h2>";
        echo "Cantidad de camisas: $cantidad<br>";
        echo "Precio unitario por camisa: $precio_unitario<br>";
        echo "Total sin descuento: $total_sin_descuento<br>";
        echo "Descuento aplicado: " . ($descuento * 100) . "%<br>";
        echo "Total a pagar con descuento: $total_con_descuento<br>";
    }
    ?>
</body>
</html>
