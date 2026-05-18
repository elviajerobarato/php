<?php
    //rellenado del array
    for($i=0; $i<=10; $i++){
        for($j=0;$j<=10;$j++) {
            $tabla[$i][$j] = $i*$j;
        }
    }

    //Mostrar la tabla de multiplicar de cada número

    for ($i =0; $i < count($tabla); $i++) {
        echo "<br>Tabla del $i:<br>";
        for ($j=0; $j < count($tabla[$i]); $j++)  {
            echo "<br> $i * $j = ".$tabla[$i][$j];
        }
        echo"<br>";
    }

?>