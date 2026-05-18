<?php

$nombre =strtolower(trim($_POST["nombre"]));
$colorfavorito =$_POST["colorfavorito"];
$color =$_POST["color"];



//echo $nombre."<br>";
//echo $colorfavorito."<br>";
//echo $color."<br>";

setcookie("nombreusu", $nombre, time()+3600);
setcookie("colorusu", $colorfavorito, time()+3600);

header("Location:index.php");
exit;

    
    
?>