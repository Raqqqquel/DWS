<?php
 /* Escribe un programa en PHP que genere un array de un número aleatorio de valores numéricos (entre 5 y 15). 
Los valores se encontraran entre 0 y 10, también obtenidos de forma aleatoria. */

    //Declaro el array
    $valores = array();

    //Inicializo el array con 10 números aleatorios
    for ($i=0; $i <= 9; $i++) {
        $valores[$i] = rand(5,15);
    }

    echo "<pre>";
    var_dump($valores);
    echo "</pre>";
?>
