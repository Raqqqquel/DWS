<?php
    echo "Haz un programa en PHP que defina una constante LÍMITE 
    y genere un número aleatorio entre 1 y el límite y lo muestre 
    por pantalla indicando si es par o impar. Usar el operador 
    ternario y la función rand.    ";
    echo "</br>";

    
    const LIMITE = 10;
    $random = rand(1, LIMITE);
    $result = ($random%2==0) ? "es par" : "es impar";

    echo "El resultado $result";
    
    

    