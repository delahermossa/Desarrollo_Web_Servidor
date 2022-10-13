<?php

 /*  EJERCICIO 2
        Imprimir los múltiplos de 3 entre 0 y 30
        en "formato array"
        [3, 6, 9, ... 30]
    */
    echo "[";
    $string = "";
    for ($i = 3; $i <= 50; $i+=3) {
        $string = $string . $i . ",";
    }
    $string = substr($string, 0, strlen($string)-1);
    echo $string;
    echo "]";
