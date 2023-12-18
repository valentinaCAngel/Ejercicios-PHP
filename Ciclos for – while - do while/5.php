<!DOCTYPE html>
<html>
<head>
    <title>Tablas de Multiplicar del 1 al 10</title>
</head>
<body>
    <h1>Tablas de Multiplicar del 1 al 10</h1>
    <?php
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><th>Tabla del $i</th></tr>";
        for ($j = 1; $j <= 10; $j++) {
            $resultado = $i * $j;
            echo "<tr><td>$i x $j = $resultado</td></tr>";
        }
    }
    echo "</table>";
    ?>
</body>
</html>
