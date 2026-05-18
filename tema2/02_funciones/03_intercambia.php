<?php
//  función llamada intercambia que reciba 2 parámetros numéricos por referencia, y lo que haga sea intercambiar sus valores
function intercambia(&$a, &$b){
	echo "Valor inicial de A: $a y de B: $b <br>";
	$c = $a;
	$a = $b;
	$b = $c;
	
	
	echo "Valor de intercambio, valores actuales de A: $a y de B: $b <br>";
	}	

$x = 4;
$y = 9;

intercambia($x, $y);


?>