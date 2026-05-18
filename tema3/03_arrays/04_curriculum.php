<?php

$texto_es .= "Curriculum <br>";
$texto_es .= "Idioma español <br>";
$texto_es .= "Nombre: Juan F M L <br>";
$texto_es .= "Estudios:<br>";
$texto_es .= "Ingeniero Agrónomo<br>";
$texto_es .= "Administración y finanzas<br>";
$texto_es .= "Idiomas: Español, Inglés<br>";
$texto_en .= "Curriculum <br>";
$texto_en .= "Lenguage english <br>";
$texto_en .= "Nombre: Juan F M L <br>";
$texto_en .= "Education:<br>";
$texto_en .= "Agricultural Engineer <br>";
$texto_en .= "Administration and Finance <br>";
$texto_en .= "Languages: Spanish, English<br>";

$idioma = "es";
$texto = "texto_" . $idioma;
echo $$texto;

echo "<br><br>";

$idioma = "en";
$texto = "texto_" . $idioma;
echo $$texto;



?> 
