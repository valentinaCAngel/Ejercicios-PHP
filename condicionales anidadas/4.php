<!DOCTYPE html>
<html>
<head>
    <title>Calcular Precio con Descuento</title>
</head>
<body>
    <h1>Calcular Precio con Descuento</h1>
    <form method="post">
        <label for="color">Color de la bolita (Blanco, Verde, Amarilla, Azul, o Roja):</label>
        <input type="text" name="color" id="color" required>
        <br>
        <label for="monto_compra">Monto de la compra:</label>
        <input type="number" step="0.01" name="monto_compra" id="monto_compra" required>
        <br>
        <input type="submit" value="Calcular Precio Final">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $color = strtolower($_POST["color"]);
        $monto_compra = $_POST["monto_compra"];
        
        switch ($color) {
            case "blanco":
                $descuento = 0; 
                break;
            case "verde":
                $descuento = 0.10; 
                break;
            case "amarilla":
                $descuento = 0.25; 
                break;
            case "azul":
                $descuento = 0.50; 
                break;
            case "roja":
                $descuento = 1; 
                break;
            default:
                $descuento = 0; 
                break;
        }
        
        
        $monto_final = $monto_compra - ($monto_compra * $descuento);
        
        echo "<h2>Resultado:</h2>";
        echo "Color de la bolita: $color<br>";
        echo "Monto de la compra: $monto_compra<br>";
        echo "Descuento aplicado: " . ($descuento * 100) . "%<br>";
        echo "Monto final a pagar: $monto_final<br>";
    }
    ?>
</body>
</html>
