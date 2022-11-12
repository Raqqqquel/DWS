<?php
//Crea un archivo llamado ejercicio10a.html. Dentro escribe el código HTML necesario para que haya un enlace a ejercicio10b.php. Ese enlace le deberá pasar por GET una variable llamada var1 con valor 10 (el atributo href de la etiqueta a será href=“ejercicio10b.php?var1=10”).


    echo $_GET ['var1'] ?? 0 ;