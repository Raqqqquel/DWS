<?php
    echo "Haz un programa que indicada una nómina en una variable, 
    si es menor de 800€ le haga un incremento del 20%, 
    si está entre 800 € y 1200 € la deje como está, 
    y si es mayor le quite un 15%. Usar el condicional if.   ";
    echo "</br>";
    
    $nomina = 500;

    if ($nomina < 800) {
        $nomina = $nomina*1+0.20;
    } elseif ($nomina >= 800 && $nomina = 1200) {
        $nomina = 500;
    } elseif ($nomina > 800) {
        $nomina = $nomina*1+0.15;
    }
