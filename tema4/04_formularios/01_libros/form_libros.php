<!DOCTYPE html>
<html>
<title>Ejercicio1 - 04_formularios</title>
<body>

<h1>Buscador de libros</h1>
<form action ="result_libros.php" method="post">
<label for="texto">Texto de búsqueda</label>
<input type="text" name="busqueda" id="busqueda" size="20"><br>
<label for="buscar">Buscar en: </label>
<input type="radio" name="buscaren" value="titulolibro">Título del libro
<input type="radio" name="buscaren" value="nombre">Nombre
<input type="radio" name="buscaren" value="editorial">Editorial
<br>
<label for="tipolibro">Tipo de libro</label>
<select id="tipolibro" name="tipolibro">
  <option value="narrativa">Narrativa</option>
  <option value="librostexto">Libros de texto</option>
  <option value="guiasymapas">Guías y mapas</option>
</select>

<br>
<input type="submit" name="submit" value="Buscar">
</form>
</body>
</html>
