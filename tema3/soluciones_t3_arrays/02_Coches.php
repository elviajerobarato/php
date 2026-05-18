<?php
    function mostrarCoches($coches){
        foreach ($coches as $matricula =>$coche) {
            echo"<br> $matricula $coche[0] - $coche[1] - $coche[2]";
        }
    }

    $coches = array(
        "12CBD" => array("FORD","FOCUS","5 PUERTAS"),
        "11CBD" => array("SEAT","IBIZA","3 PUERTAS"),
        "13CBD" => array("TOYOTA","LAND CRUISER","3 PUERTAS"),
        "16CBD" => array("TOYOTA","RAV 4","3 PUERTAS"),
        "18CBD" => array("TOYOTA","PRIUS","3 PUERTAS")
    );
 
    
    echo "<p>Mostrando los coches ordenados por MATRÍCULA</p>";
    ksort($coches);
    mostrarCoches($coches);

    echo "<p>Mostrando los coches ordenados por MARCA Y MODELO</p>";
    usort($coches,function($item1,$item2){
        if ($item1[0] == $item2[0])
            return $item1[1] <=> $item2[1];            
        else
            return $item1[0] <=> $item2[0];
    });
    mostrarCoches($coches);
   
?>
