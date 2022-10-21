<?php
 function dniValido($dni){
    $resultado=false;
    if(numerosValidos($dni)){
       
        if(letra($dni)){
            echo "bien";
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
