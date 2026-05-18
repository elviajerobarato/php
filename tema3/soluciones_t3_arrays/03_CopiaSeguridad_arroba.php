<?php
    echo "<hr><h1>Manejo de ficheros 3</h1>";
    $fichero = "aa.txt";
    $fichero_copia = "copia_datos.txt";

    
    @readfile($fichero);
    @$contenido = file_get_contents($fichero);
    @file_put_contents($fichero_copia, $contenido);
?>