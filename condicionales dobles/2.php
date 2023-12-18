<?php
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);

    echo "Números en orden ascendente: ";

    if ($numero1 < $numero2) {
        echo $numero1 . ", " . $numero2;
    } else {
        echo $numero2 . ", " . $numero1;
    }
} else {
    $numero1 = "";
    $numero2 = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Orden Ascendente</title>
</head>
<body>
    <h1>Orden Ascendente</h1>
    <form method="post" action="">
        <label for="numero1">primer número:</label>
        <input type="text" id="numero1" name="numero1" value="<?php echo $numero1; ?>"><br>
        <label for="numero2">segundo número:</label>
        <input type="text" id="numero2" name="numero2" value="<?php echo $numero2; ?>"><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        echo "<p>Números ingresados: " . $numero1 . ", " . $numero2 . "</p>";
    }
    ?>
</body>
</html>