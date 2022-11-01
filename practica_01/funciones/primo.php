<?php

/**
 * Funcion esPrimo, recibe un numero y devuelve true o false si es primo.
 */
function esPrimo(int $numero){
    $result=true;
    for ($i = 2; $i < $numero; $i++) {
        if (($numero % $i) == 0) {
            //Devuelve false si no es primo
            $result=false;
            
        }
    }
    
    return $result;
}



?>