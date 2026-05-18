<?php

for ($i = 0; $i <= 10; $i++) {
	for ($j = 0; $j <= 10; $j++){
		$tabla[$i][$j] = $i * $j;
    	//echo $i*$j." ";
    }
//echo "<br>";
}

echo "<br>";

//for ($i = 

echo "Tabla del ".$tabla[1][1].":<br>";

for ($i = $tabla[1][1]; $i <= 10; $i++) {
echo $tabla[1][1]. " * ". $tabla[$i][1]." = ".$tabla[1][1]*$tabla[$i][1]."<br>";
	}
    
    
echo "<br>";



?> 

