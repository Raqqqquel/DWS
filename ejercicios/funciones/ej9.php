<?php
// Modificar el ejercicio anterior para utilizar una función flecha.

    $multiplicar = fn($x, $y) => $x * $y;
        
    $resultado = $multiplicar(2,3);
    echo "El resultado es $resultado";
    var_dump($multiplicar);
    