<?php
session_start();

$mensaje = "";


if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];
    $password = $_POST['password'];

    $lineas = file("usuarios.txt");

    $encontrado = false;

    // Recorrer cada línea
    foreach ($lineas as $linea) {

        // Separar usuario y contraseña
        $partes = explode(":", $linea);

        $usu = trim($partes[0]);
        $pass = trim($partes[1]);

        // Comparar
        if ($login == $usu && $password == $pass) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado) {
        $_SESSION['loginusu'] = $login;
        header("Location: index.php");
        exit;
    } else {
        $mensaje = "Login o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>Login</h1>

<?php
if ($mensaje != "") {
    echo "<p style='color:red;'>$mensaje</p>";
}
?>

<form action="login.php" method="post">
    Login: <input type="text" name="login"><br>
    Contraseña: <input type="password" name="password"><br><br>
    <input type="submit" value="Entrar">
</form>

</body>
</html>
