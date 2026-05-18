<?php 
// ejercicio a, utilizando for
echo "<p>Ejercicio a)</p>";
for ($i =0; $i<101; $i++) {
	echo$i.",";
	}
echo "<br>";

// ejercicio b, utilizando while
echo "<p>Ejercicio b)</p>";
$numero=10;
while ($numero >= 0){
	if ($numero == 0){
	echo $numero;
	}else{
	echo $numero."-";
	}
    $numero--;
}
?>