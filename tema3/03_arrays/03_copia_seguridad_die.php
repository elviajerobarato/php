<?php

//En la misma carpeta, crea un archivo llamado datos.txt con tus datos personales en varias líneas (Nombre, Dirección, Teléfono y E-mail, tuyos o inventados). Haz que la página php lea el archivo y lo guarde en otro llamado copia_datos.txt, en la misma carpeta.    

$fichero = "aa.txt";
$ficheroCopia = "copiadatos.txt";

file_exists($fichero) or die("El archivo $fichero no existe.");

$contenido = file_get_contents($fichero);
$contenidoCopia = $contenido;
file_put_contents($ficheroCopia, $contenidoCopia);


// mejor sin if, conforme ejemplo de los apuntes: file_exists($fichero) or die("El archivo $fichero no existe.");

?>