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

if (empty($_REQUEST['fruta']) && empty($_REQUEST['precio_kg'])){
?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio1</title>
</head>
<body>

<h1>Introduce una fruta</h1>
<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<br>
<label for="texto">Nombre de la fruta:</label>
<input type="text" name="fruta" id="fruta" size="10"><br>
<label for="texto">Precio kg:</label>
<input type="text" name="precio_kg" id="precio_kg" size="10"><br>
<label for="texto">Temporada:</label>
<select id="temporada" name="temporada">
  <option value="anual">Anual</option>
  <option value="primavera">Primavera</option>
  <option value="verano">Verano</option>
<option value="otono">Otoño</option>
<option value="invierno">Invierno</option>
</select>
<br>
<input type="submit" name="submit" value="Enviar">
<br>
    <p><a href="index.php">Página principal</a></p>
<br>   
    
</form>
</body>
</html>
    
    
<?php
    
}else{



$insercion = $pdo->prepare("INSERT INTO frutas(fruta, precio_kg, temporada)" .
 " VALUES(:fruta, :precio_kg, :temporada)");
$insercion->bindParam(':fruta', $_REQUEST['fruta']);
$insercion->bindParam(':precio_kg', $_REQUEST['precio_kg']);
$insercion->bindParam(':temporada', $_REQUEST['temporada']);

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

}
    
?>


