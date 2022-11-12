<?php
/* Crea una función anónima que devuelva la multiplicación de dos números. 
Asignar esa función a una variable y ejecutarla para comprobar el resultado.
*/

    $multiplicar = function($a, $b){
        return $a * $b;
    };

    $resultado = $multiplicar(2,3);
    echo "El resultado es $resultado";
    var_dump($multiplicar);
    