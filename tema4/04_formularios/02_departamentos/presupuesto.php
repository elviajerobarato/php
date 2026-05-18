<?php

    
$presupuesto_informatica=500;
$presupuesto_lengua=300;
$presupuesto_ingles=400;
$presupuesto_matematicas=300;

$presupuestos = [
    "informatica" => $presupuesto_informatica,
    "lengua" => $presupuesto_lengua,
    "ingles" => $presupuesto_ingles,
    "matematicas" => $presupuesto_matematicas
];

    
    
$departamentos =$_REQUEST["departamentos"];

foreach  ($departamentos as $departamento){
	  echo ($departamento) . ": " . $presupuestos[$departamento] . " €<br>";
    $total += $presupuestos[$departamento];
}

echo "<br><strong>Total presupuesto asignado: $total €</strong>";
?>