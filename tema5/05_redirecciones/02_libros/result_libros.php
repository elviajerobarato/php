<?php include('cabecera.inc.php'); ?>


<?php

$busqueda =$_REQUEST["busqueda"];
$buscaren =$_REQUEST["buscaren"];
$tipolibro =$_REQUEST["tipolibro"];

if (
    !isset($_REQUEST['busqueda'])  || empty($_REQUEST['busqueda'])  ||
    !isset($_REQUEST['buscaren'])  || empty($_REQUEST['buscaren'])  ||
    !isset($_REQUEST['tipolibro']) || empty($_REQUEST['tipolibro'])
	)
{

header("Refresh:3; url=form_libros.php");

echo "<p>Debe rellenar todos los campos antes de enviar el formulario.</p>";


if (!isset($_REQUEST['busqueda'])  || empty($_REQUEST['busqueda'])) {
echo "Rellena el campo Búsqueda<br>";
}

if (!isset($_REQUEST['buscaren'])  || empty($_REQUEST['buscaren'])) {
echo "Rellena el campo <b>Buscar en:</b><br>";
}                                          

if (!isset($_REQUEST['tipolibro']) || empty($_REQUEST['tipolibro'])) {
echo "Rellena el campo <b>Tipo de libro:</b><br";
} 

                                           
	}else{

echo $busqueda."<br>";
echo $buscaren."<br>";
echo $tipolibro."<br>";

}

?>

</form>
</body>
</html>


