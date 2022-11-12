<?php
//Dado un cierto valor numérico, 
//imprimirlo con dos decimales separados 
//por una coma, mostrando también los miles 
//separados por puntos. Usar la función number_format.

    $num = 6;

    echo number_format(
        $num, 2, ",","."
    );