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


$insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
 " VALUES('Fifa 2020', 'Deportes', 40.95), ('Comandos', 'Estrategia', 39.90)");
$insercion->execute();
//$nuevoID = $pdo->lastInsertId();
    
    
$consulta = $pdo->prepare("SELECT * from videojuegos");

if ($consulta->execute()) {
    echo "Conectado con la Base de datos";
	while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['titulo']." ".$registro['genero']." ".$registro['precio'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}

$consulta = $pdo->prepare("SELECT * FROM videojuegos WHERE genero = :genero");

if ($consulta->execute([':genero' => 'Estrategia'])) {
    echo "<p>Mostrando consulta<p>";
	while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['titulo']." ".$registro['genero']." ".$registro['precio'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}

if ($consulta->execute([':genero' => 'Deportes'])) {
    echo "<p>Mostrando consulta<p>";
	while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['titulo']." ".$registro['genero']." ".$registro['precio'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}


// Liberando conexiones

$consulta = NULL;
$insercion = NULL;
$pdo = NULL;

?>