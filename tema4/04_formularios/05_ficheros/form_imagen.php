<!DOCTYPE html>
<html>
<title>Ejercicio 5 - 05_ficheros</title>
<body>

<h1>Subir imagen</h1>
<form action ="subir_imagen.php" method="post" enctype="multipart/form-data">
<label for="texto">Título de la imagen</label>
<input type="text" name="titulo" id="titulo" size="20"><br>
<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
<input type="file" name="fichero">
<br>
<input type="submit" name="submit" value="Subir imagen">
</form>
</body>
</html>
