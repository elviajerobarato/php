<?php
    echo "<hr><h1>Variables variables</h1>";

    $estudios_es = "Ingeniero en Informática";
    $estudios_en = "Informatics Engineering";
    $idiomas_es = "Valenciano, Castellano y un poco de inglés";
    $idiomas_en = "Valencian, Spanish and a little  English";

    $idioma = "en";
    $estudios = "estudios_" . $idioma;
    $idiomas = "idiomas_" . $idioma;

    if ($idioma == "es")
        echo "<h1> Español </h1>"; 
    else
        echo "<h1> English </h1>";

    echo $$estudios."<br>";
    echo $$idiomas;
?>