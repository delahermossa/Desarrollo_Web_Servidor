<?php
// Estructura date

echo Date("l j \of Y");

echo("<br><br>");
/*
Mostrar la fecha y hora en el mismo formato que el reloj del ordenador

10:38
06/10/2022

*/
echo date ("G:i");
echo ("<br>");
echo date("d/m/Y");

echo("<br><br>");

echo date ("h:i a");
echo ("<br>");
echo date("d/m/Y");

echo("<br><br>");


/*
Usar la estructura switch para mostrar el dia actual en español

"Hoy es jueves"

"Hoy es jueves 6 de octbre de 2022
*/

$dia=date("l");
switch($dia){
    case"Monday":
        $dia=("Lunes");
        break;
    case"Tuesday":
        $dia=("Martes");
        break;
    case "Wednesday";
        $dia=("Miércoles");
        break;
    case "Thursday":
        $dia= ("Jueves");
        break;
    case "Friday":
        $dia= ("Viernes");
        break;
}

$mes=date("F");
switch($mes){
    case"January":
        $mes=("Enero");
        break;
    case"February":
        $mes=("Febrero");
        break;
    case "March";
        $mes=("Marzo");
        break;
    case "April":
        $mes= ("Abril");
        break;
    case "October":
        $mes= ("Octubre");
        break;
}

$ndia =date("j");
$anho=date("Y");

echo "Hoy es $dia $ndia de $mes del $anho";


?>