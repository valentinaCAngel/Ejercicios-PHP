<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>
    <h1>Este es un aregglo de frutas</h1>
    <?php
    $Frutas = array("Naranja","Mandarina","Pera","Manzana","Maracuya","Limón");
    echo $Frutas[0] . '<br />';
    echo $Frutas[1] . '<br />';
    echo $Frutas[2] . '<br />';
    echo $Frutas[3] . '<br />';
    echo $Frutas[4] . '<br />';
    echo $Frutas[5] . '<br />';

    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>
    <h2>Cantidad</h2>
    <?php
    echo "El numero de frutas agregadas es: ". count( $Frutas ) ."<br>";
    ?>
</body>
</html>