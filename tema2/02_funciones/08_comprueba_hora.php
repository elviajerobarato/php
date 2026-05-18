<?php
//Crea una variable de texto con una hora en ella (por ejemplo, “21:30:12”), y luego procésala para extraer por separado la hora, el minuto y el segundo, y comprobar si es una hora válida. Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos “12:63:11” no debería serlo, porque 63 no es un minuto válido.

$hora="21:30:12";
$hora2="12:63:11";

if (preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $hora, $partes) == 1){
	$hora = $partes[1];
    $minuto = $partes[2];
    $segundo = $partes[3];

    if ($hora <= 23 && $minuto <= 59 && $segundo <= 59) {
		echo "Formato de hora válido <br>";
   		} else {
    	echo "Formato de hora  no válido <br>";
			if($hora > 23){echo "La hora es incorrecta <br>.";}
        	if($minuto > 59){echo "El minuto es incorrecto <br>.";}
        	if($segundo > 59){echo "El segundo es incorrecto <br>.";}
		}
    echo "La hora completa es ".$partes[0]."<br>";
    echo "La hora es ".$partes[1]."<br>";
	echo "El minuto es ".$partes[2]."<br>";
	echo "El segundo es ".$partes[3]."<br>";
}
 echo "<br>";

if (preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $hora2, $partes) == 1){
	$hora = $partes[1];
    $minuto = $partes[2];
    $segundo = $partes[3];

    if ($hora <= 23 && $minuto <= 59 && $segundo <= 59) {
		echo "Formato de hora válido <br>";
   		} else {
    	echo "Formato de hora  no válido <br>";
			if($hora > 23){echo "La hora es incorrecta <br>";}
        	if($minuto > 59){echo "El minuto es incorrecto <br>";}
        	if($segundo > 59){echo "El segundo es incorrecto <br>";}
		}
    echo "La hora completa es ".$partes[0]."<br>";
    echo "La hora es ".$partes[1]."<br>";
	echo "El minuto es ".$partes[2]."<br>";
	echo "El segundo es ".$partes[3]."<br>";
}
 echo "<br>";

 
?>