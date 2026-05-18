<?php 
// ejercicio a, utilizando for
?>
<h1>Contadores</h1>
<p>Este contador va del 1 al 100:</p>
<?php 
echo "<p>Ejercicio a)</p>";
for ($i =0; $i<101; $i++) {
	echo$i.",";
	}
echo "<br>";
?>
<p>Este otro va del 10 al 0::</p>
<?php
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