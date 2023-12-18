<!DOCTYPE html>
<html>
<head>
    <title>Calcular Precio con Descuento</title>
</head>
<body>
    <h1>Calcular Precio con Descuento</h1>
    <form method="post">
        <label for="clave">Clave (1 o 2):</label>
        <input type="text" name="clave" id="clave" required>
        <br>
        <label for="nombre">Nombre del artículo:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="precio_original">Precio Original:</label>
        <input type="number" step="0.01" name="precio_original" id="precio_original" required>
        <br>
        <input type="submit" value="Calcular Descuento">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $clave = $_POST["clave"];
        $nombre = $_POST["nombre"];
        $precio_original = $_POST["precio_original"];

        if ($clave === "1") {
            $descuento = 0.10; 
        } elseif ($clave === "2") {
            $descuento = 0.20; 
        } else {
            $descuento = 0; 
        }

        $precio_con_descuento = $precio_original - ($precio_original * $descuento);

        echo "<h2>Resultados:</h2>";
        echo "Nombre del artículo: $nombre<br>";
        echo "Clave: $clave<br>";
        echo "Precio Original: $precio_original<br>";
        echo "Precio con Descuento: $precio_con_descuento<br>";
    }
    ?>
</body>
</html>
