<?php



$nombreusu = $_COOKIE["nombreusu"];
$colorusu = $_COOKIE["colorusu"];

if ($nombreusu ===null || $colorusu ===null) {

echo "<style>body { background-color: #ffffff; }</style>";
echo '<h1>Página de inicio</h1>';



}else{
    
echo "<style>body { background-color: " . $colorusu . "; }</style>";
echo "<h1> Bienvenido, <b>$nombreusu</b></h1>";
echo '<p><a href="borrar_prefs.php">Borrar preferencias</a></p><br>';
}
    
    
echo '<a href="preferencias.php">Accede al formulario</a><br>';
?>