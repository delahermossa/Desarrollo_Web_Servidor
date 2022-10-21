<?php
 function dniValido($dni){
    $resultado=false;
    if(numerosValidos($dni)){
       
        if(letra($dni)){
            echo "Es correcto!";
            $resultado=true;
        }
    }
    return $resultado;
}

function numerosValidos($dni){
    $result=true;
    for($i=1;$i<strlen($dni)-1;$i++){
        if(is_numeric(substr($dni,$i,1))){
            
        }else{
            
            $result=false;
        }
        
    }
    return $result;
}
function letra($dni){
    $letra=substr($dni,strlen($dni)-1,1);
    
    return true;
}

function letraDni ($dni) {
    $posicion= intval($dni%23);
    $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
  //nos quedamos con el valor que encuentra en la posición indicada dentro de la cadena letras
    $letraNif= substr ($letras, $posicion, 1);
    return $letraNif;
  }
