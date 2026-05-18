<!DOCTYPE html>
<html>
<title>Ejercicio1 - Preferencias</title>
<body>

<h1>Preferencias</h1>
<form action ="guarda_prefs.php" method="post">
<label for="texto">Nombre</label>
<input type="text" name="nombre" id="nombre" size="20"><br>
<label for="Color favorito">Color favorito</label>
<select id="colorfavorito" name="colorfavorito">
  <option>Selecciona un color</option>
  <option value="yellow">Amarillo</option>
  <option value="pink">Rosa</option>
  <option value="orange">Naranja</option>
  <option value="red">Rojo</option>
  <option value="green">Verde</option>
</select><br>
<label for="Color favorito">Selecciona un color:</label>
<input type="color" id="color" name="color" value="#ffffff" />
   
    
  
<br>
<input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>
