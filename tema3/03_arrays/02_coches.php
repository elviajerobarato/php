<?php

$coches = array(
    "1234BCD" => array(
        "marca"    => "Ford",
        "modelo"   => "Orion",
        "npuertas" => 5
    ),
    "0720DFG" => array(
        "marca"    => "Nissan",
        "modelo"   => "Almera",
        "npuertas" => 5
    ),
    "7618BPX" => array(
        "marca"    => "Kia",
        "modelo"   => "ShumaII",
        "npuertas" => 5
    ),
    "0070FMT" => array(
        "marca"    => "BMW",
        "modelo"   => "Serie1",
        "npuertas" => 4
    )
);

// a)utiliza las estructuras adecuadas para recorrerlo mostrando los datos de los coches ordenados por matrícula y posteriormente ordenados por marca y modelo.

ksort($coches);

foreach ($coches as $matricula => $datos) {
    echo $matricula . "<br>";
}


echo "<br>";


// b)utiliza las estructuras adecuadas para recorrerlo mostrando los datos de los coches ordenados por matrícula y posteriormente ordenados por marca y modelo.

uasort($coches, function($a, $b) {
    // Comparamos la marca
    $cmp = strcmp($a["marca"], $b["marca"]);
    if ($cmp !== 0) {
        return $cmp;
    }
    // Si la marca es igual, comparamos el modelo
    return strcmp($a["modelo"], $b["modelo"]);
});

foreach ($coches as $matricula => $datos) {
    echo "Marca: " . $datos["marca"] . "<br>";
    echo "Modelo: " . $datos["modelo"] . "<br>";
    echo "Puertas: " . $datos["npuertas"] . "<br>";
	echo "Matrícula: $matricula<br><br>";
}



//print_r($coches);

?>
