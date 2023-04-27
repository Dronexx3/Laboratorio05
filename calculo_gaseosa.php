<?php

$precio_inicial = $_POST["precio_incial"];
$cantidad_de_unidades = $_POST["cantidad_de_unidades"];

$precio_final = $precio_inicial * 0.95;
$importe_inicial = $precio_final * $cantidad_de_unidades;
$descuento = $importe_inicial * 0.07;
$total = $importe_inicial - $descuento;
$obsequio = $cantidad_de_unidades * 2;

echo "<h1>Datos de la compra</h1>";
echo "Precio de la gaseosa(aplicando descuento): S/ ".$precio_final."<br>";
echo "Importe incial de la compra: S/ ".$importe_inicial."<br>";
echo "Descuento: S/ ".$descuento."<br>";
echo "Total de la compra: S/ ".$total."<br>";
echo "Obsequio: ".$obsequio." caramelos<br>";

?>
