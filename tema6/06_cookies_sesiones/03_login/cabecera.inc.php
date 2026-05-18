<?php
session_start();

// Si el usuario ha pulsado "cerrar sesión"
if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

// Comprobamos si está logueado
if (!isset($_SESSION['loginusu'])) {
    header("Location: login.php");
    exit;
}
?>

<ul>
    <li><a href="pag1.php">Página 1</a></li>
    <li><a href="pag2.php">Página 2</a></li>
    <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?cerrar_sesion=1">Cerrar sesión</a></li>
</ul>
