<?php
    echo "Crear un archivo PHP que dados dos números almacenados en dos variables, 
    nos muestre por pantalla el mayor de ellos o la frase Los números son 
    iguales si son iguales. Usar la estructura switch y el operador nave espacial.";
    echo "</br>";

    $num1 = 4;
    $num2 = 3;
    echo "</br>";

    switch ($num1 <=> $num2) {
        case 0:
            echo "Los números son iguales";
            break;
        case 1:
            echo "El $num1 es mayor que $num2";
            break;
        case -1:
            echo "El $num1 es menor que $num2";
            break;
    }