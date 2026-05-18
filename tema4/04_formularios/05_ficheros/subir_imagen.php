<?php

$titulo = $_REQUEST["titulo"];

if (is_uploaded_file ($_FILES['fichero']['tmp_name']))
{
 $nombreDirectorio = "imgs/";
 $idUnico = time();
 $nombreFichero = $idUnico . "-" . $_FILES['fichero']['name'];
 move_uploaded_file ($_FILES['fichero']['tmp_name'], $nombreDirectorio .
 $nombreFichero);

echo "Título de la imagen: ".strtolower($titulo)."<br>";
echo "<img src=".$nombreDirectorio."/".$nombreFichero." alt=".$nombreFichero."><br>";


} else {
 print ("No se ha podido subir el fichero\n");
}

?>