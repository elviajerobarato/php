<?php
//echo "Hola Mundo";
/*
función llamada calculaDescuento que reciba un parámetro $precio con el precio de una compra, y un parámetro opcional llamado $descuento con el porcentaje de descuento a aplicar. Si no se pone este segundo parámetro, el valor por defecto será 0. La función devolverá con un return el precio con el descuento aplicado. Utiliza después la función desde el código PHP para calcular el descuento de un precio de 250 euros con un 10% de descuento, y el de un precio de 85 euros sin indicar descuento.
*/

function calculaDescuento($precio, $descuento=0){
$importe = $precio - $precio*$descuento;
return $importe;
}

$precio = 250;
$descuento= 0.1;

$importe = calculaDescuento($precio, $descuento);

echo "El impote final 1 es $importe, precio: $precio y descuento $descuento <br>";


$precio = 85;
$descuento= 0;

$importe = calculaDescuento($precio);

echo "El importe final 2 es $importe, precio: $precio y descuento $descuento <br>";

?>