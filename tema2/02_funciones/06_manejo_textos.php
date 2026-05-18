<?php
//Crea una variable $radio con un radio de circunferencia (el que quieras).
$radio=50;
//Crea una variable $area y calcula en ella el área del círculo, como has hecho en algún ejercicio anterior (PI * radio2, definiendo la constante PI).
define('PI', 3.1416);
$area=PI*$radio*$radio;
//echo "El área de un círculo de radio $radio es $area. <br>";

//Crea una variable $textoResultado que diga “El área calculada del círculo es” y luego ponga la variable $area, mostrando sólo 2 decimales (utiliza la función number_format). Muestra luego esta variable por pantalla con un echo.
$textoArea=number_format($area,2);
$textoResultado="El área calculada del círculo es $textoArea <br>";
echo $textoResultado;



//Crea una variable $textoResultadoMayus que convierta el texto anterior a mayúsculas, usando la función strtoupper. Muestra también esta variable por pantalla.
$textoResultadoMayus=strtoupper($textoResultado);
echo $textoResultadoMayus;

//Crea una variable llamada $textoResultadoModificado que reemplace la palabra “calculada” por la palabra “obtenida”, usando la función str_replace, en la variable $textoResultado.

$textoResultadoModificado=str_replace("calculada","obtenida",$textoResultado);
echo $textoResultadoModificado;

//Averigua la longitud del texto de la variable anterior usando la función strlen.

$textoResultadoModificadoLongitud=strlen($textoResultadoModificado);
echo "Longitud: ".$textoResultadoModificadoLongitud."<br>";

// Averigua en qué posición del texto de la variable anterior se encuentra la palabra “círculo”, usando la función strpos.
$posicion = strpos($textoResultadoModificado, "círculo");
echo "Posición: ".$posicion."<br>";

//Crea una variable $numeros que tenga el valor “1,2,3,4,5”, y utiliza la función explode para quedarte con los números por separado. Sácalos por pantalla, separados por el signo “+” (“1+2+3+4+5”), y después, intenta sumarlos entre sí y mostrar el resultado de la suma a continuación (al final, te quedará algo como “1+2+3+4+5=15”).

$numeros = "1,2,3,4,5";
$numerosSeparados=explode(',', $numeros);
//$numerosJuntos=implode('+', $numerosSeparados);
//echo $numerosJuntos."<br>";

for ($i=0; $i<count($numerosSeparados); $i++) {
    $suma+=$numerosSeparados[$i];	
    if ($numerosSeparados[$i] == 5){
        echo $numerosSeparados[$i]."=".$suma; 
    }else{
    echo $numerosSeparados[$i]."+";			
	}
   
}




?>