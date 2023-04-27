<?php
    
$importe_total = $_POST['importe_total_vendido'];
$cantidad_de_Hijos = $_POST['cantidad_de_hijos'];

$sueldo_basico = 600;
$comision = $importe_total * 0.075;
$bonificacion = $cantidad_de_Hijos * 50;
$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
$descuento = $sueldo_bruto * 0.11;
$sueldo_neto = $sueldo_bruto - $descuento;

echo "<h2>Datos:</h2>";
echo "Comisión: S/ " . $comision . "<br>";
echo "Bonificación: S/ " . $bonificacion . "<br>";
echo "Sueldo bruto: S/ " . $sueldo_bruto . "<br>";
echo "Descuento: S/ " . $descuento . "<br>";
echo "Sueldo neto: S/ " . $sueldo_neto . "<br>";
    
?>