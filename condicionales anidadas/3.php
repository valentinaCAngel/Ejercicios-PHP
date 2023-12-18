<?php
if (isset($_POST['nombre']) && isset($_POST['tiempo']) && isset($_POST['salario'])) {
    $nombre = $_POST['nombre'];
    $tiempo = $_POST['tiempo'];
    $salario = floatval($_POST['salario']);

    $utilidad = 0; 

    if ($tiempo == "Menos de 1 año") {
        $utilidad = 0.05 * $salario; 
    } elseif ($tiempo == "1 año o más y menos de 2 años") {
        $utilidad = 0.07 * $salario; 
    } elseif ($tiempo == "2 años o más y menos de 5 años") {
        $utilidad = 0.10 * $salario; 
    } elseif ($tiempo == "5 años o más y menos de 10 años") {
        $utilidad = 0.15 * $salario; 
    } elseif ($tiempo == "10 años o más") {
        $utilidad = 0.20 * $salario; 
    }

    echo "Nombre del trabajador: " . $nombre . "<br>";
    echo "Antigüedad en la empresa: " . $tiempo . "<br>";
    echo "Salario mensual: $" . $salario . "<br>";
    echo "Utilidad anual: $" . $utilidad . "<br>";
    echo "Salario Total: $" . $utilidad + $salario. "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Utilidades</title>
</head>
<body>
    <h1>Calculadora de Utilidades</h1>
    <form method="post" action="">
        <label for="nombre">Nombre del trabajador:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="tiempo">Antigüedad en la empresa:</label>
        <select id="tiempo" name="tiempo">
            <option value="Menos de 1 año">Menos de 1 año</option>
            <option value="1 año o más y menos de 2 años">1 año o más y menos de 2 años</option>
            <option value="2 años o más y menos de 5 años">2 años o más y menos de 5 años</option>
            <option value="5 años o más y menos de 10 años">5 años o más y menos de 10 años</option>
            <option value="10 años o más">10 años o más</option>
        </select><br>
        <label for="salario">Salario mensual:</label>
        <input type="text" id="salario" name="salario" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>