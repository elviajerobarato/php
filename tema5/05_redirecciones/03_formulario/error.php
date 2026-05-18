<?php
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : "Ha ocurrido un error.";
?>

<!DOCTYPE html>
<html>
<head>
<title>Error</title>
</head>
<body>

<p style="color:red; font-weight:bold;">
    <?php echo htmlspecialchars($mensaje); ?>
</p>

<p><a href="formulario.php">Volver al formulario</a></p>

</body>
</html>
