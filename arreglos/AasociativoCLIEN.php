<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <h1>Este es un arreglo asociativo de un cliente</h1>
    <?php
    $cliente=array('nombre'=> 'Lisa', 'celular'=> '34856941', 'nit'=> '1004587967', 'Ciudad'=> 'Seul', 'contacto'=> 'lisaManoban@gmail.com',);
   echo "EL nombre del cliente es: ". $cliente['nombre'];
   echo "<br>";
   echo "EL celular de pedro es: ". $cliente['celular'];
   echo "<br>";
   echo "EL nit de pedro es: ". $cliente['nit'];
   echo "<br>";
   echo "La ciudad de pedro es: ". $cliente['Ciudad'];
   echo "<br>";
   echo "EL contacto de pedro es: ". $cliente['contacto'];
   echo "<br>";
   echo "<h2> Pedro Cambio su numero de Cedula por lo tanto: </h2>";
   echo "EL anterior numero de cedula de pedro es: ". $cliente['nit'];
   echo "<br>";
   $cliente['nit']='110789654';
   echo "EL numero de cedula de pedro ahora es es: ". $cliente['nit'];
   
   ?>


</body>
</html>