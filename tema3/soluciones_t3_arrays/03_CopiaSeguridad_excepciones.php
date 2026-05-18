<?php
    echo "<hr><h1>Manejo de ficheros 3</h1>";
    $fichero = "aa.txt";
    $fichero_copia = "copia_datos.txt";

    try {
        if (!file_exists($fichero)) throw new Exception("el fichero $fichero no existe");
            readfile($fichero);
        $contenido = file_get_contents($fichero);
        file_put_contents($fichero_copia, $contenido);
        $rr=4/0;
    } catch (Error $e) { echo "Se ha producido un error ". $e->getMessage();}
    catch (Exception $ex) { echo "Se ha producido una excepcion ". $ex->getMessage();}
?>