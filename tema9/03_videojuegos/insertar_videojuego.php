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

/*
$insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
 " VALUES('Fifa 2020', 'Deportes', 40.95), ('Comandos', 'Estrategia', 39.90)");
$insercion->execute();
$nuevoID = $pdo->lastInsertId();
*/

$insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
 " VALUES(:titulo, :genero, :precio)");
$insercion->bindParam(':titulo', $_REQUEST['titulo']);
$insercion->bindParam(':genero', $_REQUEST['genero']);
$insercion->bindParam(':precio', $_REQUEST['precio']);

/*$insercion->execute();

$consulta = $pdo->prepare("SELECT * from videojuegos");
*/

if ($insercion->execute()) {
        header("Location:index.php");
        exit;
    } else {
        header("Location:error.php");
        exit;
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