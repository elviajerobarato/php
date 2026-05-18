<!DOCTYPE html>
<html>
<title>Ejercicio 2 - 02_departamento</title>
<body>

<h1>Departamento</h1>
<form action ="presupuesto.php" method="post">
<label for="departamentos">Selecciona:</label><br>
<select id="departamentos" multiple name="departamentos[]">
  <option value="informatica">informática</option>
  <option value="lengua">lengua</option>
  <option value="matematicas">matemáticas</option>
  <option value="ingles">inglés</option>
</select>

<br>
<input type="submit" name="submit" value="Buscar">
</form>
</body>
</html>
