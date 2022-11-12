<?php
/* Crea una función PHP que multiplique los números que se le pasen. A la función se le pueden pasar diferente cantidad de números (2, 3, 5…) 
y deberá multiplicarlos todos. */

    function mult($num1,$num2,$num3,$num4,$num5)
    {
        $resultado = $num1 * $num2 * $num3 * $num4 * $num5;
        echo "El resultado de la multiplicación es: $resultado";
    }