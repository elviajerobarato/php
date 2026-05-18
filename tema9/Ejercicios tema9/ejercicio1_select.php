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

    
    
$consulta = $pdo->prepare("SELECT * from videojuegos");

if ($consulta->execute()) {
    echo "Conectado con la Base de datos";
	while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['titulo'];
		}
	} else {
echo "<h2> Ha habido un problema con la consulta</h2>";
}



?>