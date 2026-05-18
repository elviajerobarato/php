<?php
if (!isset($_REQUEST["departamentos"])) {

?>

<!DOCTYPE html>
<html>
<title>Ejercicio 2 - 02_departamento</title>
<body>

<h1>Departamento</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="departamentos">Selecciona:</label><br>

<select id="departamentos" multiple name="departamentos[]">
  <option value="informatica">informática</option>
  <option value="lengua">lengua</option>
  <option value="matematicas">matemáticas</option>
  <option value="ingles">inglés</option>
</select>

<br><br>
<input type="submit" name="submit" value="Buscar">
</form>

</body>
</html>

<?php

} else {

$presupuesto_informatica = 500;
$presupuesto_lengua = 300;
$presupuesto_ingles = 400;
$presupuesto_matematicas = 300;

$presupuestos = [
    "informatica" => $presupuesto_informatica,
    "lengua" => $presupuesto_lengua,
    "ingles" => $presupuesto_ingles,
    "matematicas" => $presupuesto_matematicas
];

$departamentos = $_REQUEST["departamentos"];
$total = 0;

foreach ($departamentos as $departamento) {
    echo strtoupper($departamento) . ": " . $presupuestos[$departamento] . " €<br>";
    $total += $presupuestos[$departamento];
}

echo "<br><strong>Total presupuesto asignado: $total €</strong>";

}
?>
