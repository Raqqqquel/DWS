<?php
    echo "Haz un programa en PHP que dado un dni nos calcule la letra. 
    El cálculo de la letra se obtiene calculando el resto de la división 
    del dni entre 23. Ese resto será la posición de la letra 
    en la cadena “TRWAGMYFPDXBNJZSQVHLCKEO”. Usar la función substr.
    ";
    echo "</br>";
    echo "</br>";

    $dni = 54014494;
    
    $resultado = $dni % 23;

    $letra = substr("TRWAGMYFPDXBNJZSQVHLCKEO2", $resultado, 1);
    echo "La letra del DNI es $letra";