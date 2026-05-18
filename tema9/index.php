<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de ejercicios</title>
</head>
<body>
    <h1>Ejercicios disponibles</h1>
    <ul>
        <?php
        $archivos = scandir('.');
        foreach ($archivos as $archivo) {
            if ($archivo !== '.' && $archivo !== '..' && $archivo !== 'index.php') {
                echo "<li><a href='$archivo'>$archivo</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
