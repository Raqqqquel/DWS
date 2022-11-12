<?php
/*Crea una función PHP donde se le pasarán 1 argumento de tipo string y la mostrará por pantalla. 
La función mostrará un error en el caso que el argumento no sea una cadena. */

    declare(strict_types=1);

    function frase(string $frase)
    {
        echo "$frase";
    }

    frase("Hola Mundo");
    frase(1);