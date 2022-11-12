<?php 
    /* "Escribe el código necesario para que, de forma lo más eficiente posible, 
    nos muestre los menús que no tienen postre actualmente 
    (los menús se numeran de forma correlativa empezando por el 1)."; */


    $menus = [
        [
            "primero" => "sopa",
            "segundo" => "carne",
            "postre" => "tarta"
        ],
        [
            "primero" => "ensalada",
            "segundo" => "carne",
        ],
        [
            "primero" => "macarrones",
            "segundo" => "pescado",
        ],
        [
            "primero" => "sopa",
            "segundo" => "pescado",
            "postre" => "flan"
        ],
    ];
    $sinPostre = [];

    foreach($menus as $key => $value){
        if (array_key_exists("postre",$value)) {
            $sinPostre [] = $key+1;
        }
    };

    var_dump($sinPostre);

