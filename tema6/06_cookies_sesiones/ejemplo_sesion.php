<?php

$login="Juan";


if(empty($login) || !isset($login)){
	echo "Debes iniciar sesion";

}else if($login=="Juan"){

session_start();
echo "Bienvenido $login <br>";
$_SESSION['user'] = $login;

 // Confirmar que la sesión está iniciada
    if (isset($_SESSION['user'])) {
        echo "Sesión iniciada correctamente";
    }


}else{
echo "Adios $login <br>";

 // Cerrar sesión
    unset($_SESSION['user']);
    session_destroy();

    echo "Se ha cerrado la sesión <br>";

    // Confirmar que la sesión está cerrada
    if (!isset($_SESSION['user'])) {
        echo "Sesión cerrada correctamente";
    }
}


?> 
