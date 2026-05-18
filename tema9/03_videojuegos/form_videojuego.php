<?php
    
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio2 - 02_Videojuegos</title>
</head>
<body>

<h1>Alta de un videojuego</h1>
<form action ="insertar_videojuego.php" method="post">
<label for="titulo">Título</label>
<input type="text" name="titulo" id="titulo" size="20"><br>
<label for="genero">Género</label>
<select id="genero" name="genero">
  <option value="" selected>Seleccione un género:</option>
  <option value="accion">Acción</option>
  <option value="RPG">Rol</option>
  <option value="deportes">Deportes</option>
</select>
<br>
<label for="texto">Precio</label>
<input type="text" name="precio" id="precio" size="20"><br>
<br>
<input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>
