<?php
//EJERCICIO 3: 
 

//Crear un formulario que reciba el nombre y la edad de una persona y
//muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
//a su edad. Además:
//- Convertir la edad a un número entero
//- Convertir el nombre introducido a minúsculas salvo la primera letra, 
//que será mayúscula

$nombre=$_GET["nombre"];
$edad=(int)$_GET["edad"];

$nombre =ucwords(strtolower($nombre));

if ($edad<18){
    echo"<p>$nombre es menor de edad</p>";
}else if($edad>=18 && $edad <=65){
    echo"<p>$nombre es mayor de edad</p>";

}else{
    echo"<p>$nombre se ha jubilado</p>";
}

?>