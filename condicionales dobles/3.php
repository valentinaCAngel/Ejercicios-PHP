<?php
$peso = 70; 
$tiempoEnMinutos = 60; 

$caloriasDormirPorMinuto = 1.08;
$caloriasReposoPorMinuto = 1.66;

$caloriasDormir = $caloriasDormirPorMinuto * $tiempoEnMinutos;
$caloriasReposo = $caloriasReposoPorMinuto * $tiempoEnMinutos;

$totalCalorias = $caloriasDormir + $caloriasReposo;

echo "La persona consumió un total de $totalCalorias calorías durante $tiempoEnMinutos minutos realizando estas actividades:\n";
echo "Dormir: $caloriasDormir calorías\n";
echo "Reposo: $caloriasReposo calorías\n";
?>
