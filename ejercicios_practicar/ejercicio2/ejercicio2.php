<?php

if(empty($_REQUEST['frase'])) {

?>


<h1>Introduce una frase</h1>
<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="texto">Frase</label>
<input type="text" name="frase" id="frase" size="50"><br>
<br>
<input type="submit" name="submit" value="Buscar">
</form>

<?php
}else{

?>

<h1>Introduce una frase</h1>
<form action ="ejercicio2_refran.php" method="post">
<label for="texto">Frase</label>
<input type="text" name="frase" id="frase" size="50"><br>
<br>
<input type="submit" name="submit" value="Buscar">
</form>

<?php

$frase = $_REQUEST['frase']; 
$frase= trim($frase);
echo "Has introducido la siguiente frase: <i>$frase </i><br>";
echo "<br>";
$caracteres = strlen($frase);
echo "Número de letras: $caracteres <br>";

//elimiminar espacios en blanco
$modificado= str_replace(" ", "", $frase);

$totalModificado = strlen($modificado);
echo "Número de letras sin espacios: $totalModificado <br>";
$espaciosBlanco = $caracteres - $totalModificado;
echo "Numero de espacios: $espaciosBlanco<br>";

echo "<br>";
echo "<br>";
   
$partes = explode(' ', $frase);

/*    
foreach ($partes as $parte){
echo $partes."<br>";
	}
*/
echo "Listado palabras";    
echo "<br>";
for ($i = 0; $i <count($partes); $i++){
	echo $partes[$i]."<br>";

	}

$palabras=count($partes);
echo "Total palabras: $palabras";

// echo "Listado palabras 2";

echo "<br>";
echo "<br>";

for ($i = 0; $i <count($partes); $i++){
    $letras=strlen($partes[$i]);
	echo $partes[$i].": tiene $letras letras <br>";
	}   
    
} // fin del código

?>