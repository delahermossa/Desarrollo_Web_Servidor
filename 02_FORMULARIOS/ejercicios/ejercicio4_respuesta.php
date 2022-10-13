<?php

/**
 * EJERCICIO 4:
 * Crear un formulario
 *  que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase 
 * en un encabezado de dicho número.
 * Si introducimos "5" y "Hola mundo" se mostrará un encabezado <h5>Hola mundo</h5>

 */

 $frase=$_GET["frase"];
 $encabezado=$_GET["encabezado"];

 echo"<h$e>$frase</h$e";
?>