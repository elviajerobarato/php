<?php


$host = "sql110.infinityfree.com"; //localhost
$nombreBD = "if0_41327758_fruteria"; //fruteria
$usuario = "if0_41327758";
$password = "gei8DZBN6D8wMd";   

//$host = "localhost"; // localhost
//$nombreBD = "if0_41327758_fruteria"; //fruteria
//$usuario = "if0_41327758"; //root
//$password = "gei8DZBN6D8wMd"; //password
$pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);

/*
$consulta = $pdo->prepare("SELECT * from frutas");
if ($consulta->execute()) {
  		while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['fruta']." ".$registro['precio_kg']." ".$registro['temporada'];
        	}
		} else {
	echo "<h2> Ha habido un problema con la consulta</h2>";
}
*/

?>



<!DOCTYPE html>
<html>
<head>
<title>Ejercicio1</title>
</head>
<body>

<h1>Filtro de búsqueda</h1>
<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<br>
<label for="texto">Precio máximo</label>
<input type="text" name="precio_kg" id="precio_kg" size="10">
<input type="submit" name="submit" value="Buscar">
<br>
    <p><a href="form_fruta.php">Formulario para introducir frutas</a></p>
<br>   
    
</form>
</body>
</html>



<?php

$precio_kg = $_REQUEST['precio_kg'];
// echo $precio_kg."<br>";
if (empty($precio_kg)){
    echo "Se muestran todas las frutas<br>";
    $consulta = $pdo->prepare("SELECT * from frutas");
if ($consulta->execute()) {
  		while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['fruta']." ".$registro['precio_kg']." ".$registro['temporada'];
        	}
		} else {
	echo "<h2> Ha habido un problema con la consulta</h2>";
			}
	
	}else{   
    //echo "El importe introducido es ".$precio_kg."<br>";
	echo "Mostrar frutas que con precio <= $precio_kg";
    $consulta = $pdo->prepare("SELECT * from frutas WHERE precio_kg <= :precio_kg");
	$consulta->bindParam(':precio_kg', $precio_kg);
    if ($consulta->execute()) {
  		while ($registro = $consulta->fetch()) {
		echo "<br>- ".$registro['id']." ".$registro['fruta']." ".$registro['precio_kg']." ".$registro['temporada'];
        	}
    }
    	
    
  }

?>