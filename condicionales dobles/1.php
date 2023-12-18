<?php

$precioCompra = 1200; 
$descuento = 0.20;


if ($precioCompra > 1000) {
    $precioFinal = $precioCompra - ($precioCompra * $descuento);
} else {
    $precioFinal = $precioCompra;
}


echo "El precio final a pagar es: $" . number_format($precioFinal, 2);
?>
