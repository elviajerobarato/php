<?php
$nota1 = 9;
$nota2 = 6.5;
$nota3 = 4.8;

if ($nota1 > $nota2 && $nota1 > $nota3) {
    echo "Nota1 ($nota1) es mayor que Nota2 ($nota2) y que Nota3 ($nota3)";
} else if ($nota2 > $nota1 && $nota2 > $nota3) {
    echo "Nota2 ($nota2) es mayor que Nota1 ($nota1) y que Nota3 ($nota3)";
} else {
    echo "Nota3 ($nota3) es mayor que Nota1 ($nota1) y que Nota2 ($nota2)";
}
?>
