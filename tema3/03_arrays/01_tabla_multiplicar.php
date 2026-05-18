<?php

// Crear array bidimensional con las tablas del 0 al 9
for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        $tabla[$i][$j] = $i * $j;
    }
}

// Mostrar todas las tablas del 0 al 9
for ($i = 0; $i <= 9; $i++) {
    echo "<strong>Tabla del $i</strong><br>";

    for ($j = 0; $j <= 10; $j++) {
        echo "$i * $j = " . $tabla[$i][$j] . "<br>";
    }

    echo "<br>";
}

?>