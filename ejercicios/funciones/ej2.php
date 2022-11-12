<?php
//Modifica el ejercicio anterior para que uno de los números esté almacenado en una variable fuera de la función.

    $num1 = 1;
    $num2 = 4;

    function suma() 
    {
        global $num1, $num2;
        $resultado = $num1 + $num2;
        echo "El resultado es $resultado";
    }
   