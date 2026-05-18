<?php

//En la misma carpeta, crea un archivo llamado datos.txt con tus datos personales en varias líneas (Nombre, Dirección, Teléfono y E-mail, tuyos o inventados). Haz que la página php lea el archivo y lo guarde en otro llamado copia_datos.txt, en la misma carpeta.    

$fichero = "aa.txt";
$ficheroCopia = "copiadatos.txt";


try
{

if (!file_exists($fichero))
	{	
    throw new Exception("El archivo $fichero no existe.");
	}

	$contenido = file_get_contents($fichero);
	$contenidoCopia = $contenido;
	file_put_contents($ficheroCopia, $contenidoCopia);
	echo $fichero." se ha copiado correctamente en <a href='".$ficheroCopia."'>".$ficheroCopia."</a><br>";
	echo $contenidoCopia."<br>";
	
}
	catch (Exception $e) 
{
	echo 'Se ha producido un error: ' . $e->getMessage();
}    
    

?>