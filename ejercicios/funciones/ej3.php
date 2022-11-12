<?php
//Crea una función en PHP que añada un elemento al array. A dicha función se le pasará el array y el elemento a insertar como argumentos.

    $miArray = [3, 4, 6];

    function anyadir($miArray, $elemento){
        $miArray [] = $elemento;
    }
    
    anyadir($miArray, 9);
    var_dump($miArray);