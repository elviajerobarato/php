<?php

 /*    
$host = "localhost";
$nombreBD = "videojuegos";
$usuario = "root";
$password = "";
*/

    
$host = "sql110.infinityfree.com";
$nombreBD = "if0_41327758_lm";
$usuario = "if0_41327758";
$password = "gei8DZBN6D8wMd";    

$pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);

echo "<p>Listado de videojuegos actualizado</p>";

echo "<a href='form_videojuego.php'>Acceso al formulario</a><br>";    

$precio = $_REQUEST['precio'];

if ($precio == ""){


$consulta = $pdo->prepare("SELECT * from videojuegos");

if ($consulta->execute()) {
    echo "Conectado con la Base de datos<br>";
    echo "$nuevoID<br>";
		while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['titulo']." ".$registro['genero']." ".$registro['precio'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}


    
?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio3 - 03_Videojuegos</title>
</head>
<body>

<h1>Filtro de búsqueda</h1>
<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<br>
<label for="texto">Precio</label>
<input type="text" name="precio" id="precio" size="10">
<input type="submit" name="submit" value="Buscar">
</form>
</body>
</html>


<?php


/*
$insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
 " VALUES('Fifa 2020', 'Deportes', 40.95), ('Comandos', 'Estrategia', 39.90)");
$insercion->execute();
$nuevoID = $pdo->lastInsertId();
*/
/*
$insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
 " VALUES(:titulo, :genero, :precio)");
$insercion->bindParam(':titulo', $_REQUEST['titulo']);
$insercion->bindParam(':genero', $_REQUEST['genero']);
$insercion->bindParam(':precio', $_REQUEST['precio']);
$insercion->execute();
*/

}else{    
    
$consulta = $pdo->prepare("SELECT * from videojuegos WHERE precio <= :precio");
$consulta->bindParam(':precio', $_REQUEST['precio']);

if ($consulta->execute()) {

	echo "<a href='index.php'>Acceso al buscador</a><br>";    
    /*echo "Conectado con la Base de datos<br>";*/
    echo "$nuevoID<br>";
		while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['titulo']." ".$registro['genero']." ".$registro['precio'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}


    
/*    
$consulta = $pdo->prepare("SELECT * from videojuegos");

if ($consulta->execute()) {
    echo "Conectado con la Base de datos<br>";
    echo "$nuevoID<br>";
		while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['titulo']." ".$registro['genero']." ".$registro['precio'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}

*/

?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio3 - 03_Videojuegos</title>
</head>
<body>

<h1>Filtro de búsqueda</h1>
<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<br>
<label for="texto">Precio</label>
<input type="text" name="precio" id="precio" size="10">
<input type="submit" name="submit" value="Buscar">
</form>
</body>
</html>    
    
<?php    
}
?>

