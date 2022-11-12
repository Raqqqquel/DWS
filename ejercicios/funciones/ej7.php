<?php
/* Crea una función PHP donde se le pasarán 3 argumentos. 
El primer argumento será de tipo int. 
El segundo será un array numérico. 
El tercero será una serie de números que tendremos que sumar al primer argumento.
El resultado lo añadiremos como un nuevo elemento al array. 
La función deberá comprobar que los tipos de datos son correctos.
*/

    function tresArgumentos($int,$array,$numeros)
    {
        if (!is_int($int)){
            echo "El primer argumento no es un entero.";
            return null;
        } elseif (!is_array($array)) {
            echo "El segundo argumento no es un array.";
            return null;
        } elseif (!is_numeric($numeros)) {
            echo "El tercer argumento no es una serie de números.";
            return null;
        } else {
            foreach ($numeros as $numero) {
                array_push($array, $numero + $int);
            }
        return $array;
        }
    }

    $numero = 5;
    $array = [1, 2, 3, 4];
    $numeros = [6, 7, 8, 9];

    var_dump(tresArgumentos($numero, $array, $numeros));