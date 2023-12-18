<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <h1>Este es un aregglo de carros</h1>
    <?php
    $carros = array("Renult","Mazda","Chevrolet","Nissan","Kawasaki","Metrokia","Mercedez");
    echo $carros[0] . '<br />';
    echo $carros[1] . '<br />';
    echo $carros[2] . '<br />';
    echo $carros[3] . '<br />';
    echo $carros[4] . '<br />';
    echo $carros[5] . '<br />';
    echo $carros[7] . '<br />';
    echo $carros[8] . '<br />';

    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>
    <h2>Cantidad</h2>
    <?php
    echo "El numero de carros agregados es: ". count( $carros ) ."<br>";
    ?>
</body>
</html>