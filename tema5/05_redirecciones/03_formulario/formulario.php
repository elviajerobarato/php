<?php
if (!isset($_POST["nombre"]) || !isset($_POST['email']) || !isset($_FILES['fichero'])) {
?>



<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 3 - 03_formulario</title>
</head>
<body>

<h1>Formulario</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" size="20"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" size="20"><br>

    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
    <input type="file" name="fichero"><br>

    <input type="submit" name="submit" value="Enviar">
</form>

</body>
</html>
<?php
} else {

$nombre = trim($_POST["nombre"]);
$email  = trim($_POST["email"]);

// Validación nombre
if ($nombre === "") {
    header("Location: error.php?mensaje=Debes indicar tu nombre");
    exit;
}

// Validación email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: error.php?mensaje=Debes indicar un email válido");
    exit;
}

// Validación fichero
if (!is_uploaded_file($_FILES['fichero']['tmp_name'])) {
    header("Location: error.php?mensaje=Debes adjuntar una imagen");
    exit;
}

// Guardar imagen
$nombreDirectorio = "fotos/";
$idUnico = time();
$nombreOriginal = basename($_FILES['fichero']['name']);
$nombreFichero = $idUnico . "-" . $nombreOriginal;

move_uploaded_file($_FILES['fichero']['tmp_name'], $nombreDirectorio . $nombreFichero);

// Mostrar datos
echo "Nombre: " . strtolower($nombre) . "<br>";
echo "Email: " . strtolower($email) . "<br><br>";
echo '<img src="' . $nombreDirectorio . $nombreFichero . '" width="200"><br>';
echo "El correo ha sido enviado correctamente<br>";

}
?>