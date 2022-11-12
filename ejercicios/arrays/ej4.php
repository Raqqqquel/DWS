<?php
    /* Una empresa quiere actualizar su gestión de almacén. Hasta ahora, iban apuntando en una hoja de cálculo el material que quedaba después de retirarlo de las estanterías (si no se retiraba algún material, no se apuntaba ese mes). Los datos de los dos meses que lleva abierta son:
    Hacer un programa en PHP para que nos muestre el total de material 
    que queda en junio en el almacén. */

    $mayo = [
        "tornillos" => 57,
        "tuercas" => 23,
        "clavos" => 45,
        "arandelas" => 56,
        "muelles" => 32
    ];

    $junio = [
        "tornillos" => 32,
        "arandelas" => 51,
        "bridas" => 309
    ];

    $resultado = $junio + $mayo;
    var_dump($resultado);