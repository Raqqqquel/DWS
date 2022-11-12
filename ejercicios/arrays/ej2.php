<?php
 /* Crea un archivo PHP que almacene en un array la tabla de multiplicar del 7. 
El programa deberá sacar por pantalla dicha tabla. */

    $num = 7;
    $tabla = [];

    for($i=1;$i<=10;$i++)
    {
        $tabla[] = $num * $i;
        print $num. " * ".$i." = ".$tabla."<br>";
    }