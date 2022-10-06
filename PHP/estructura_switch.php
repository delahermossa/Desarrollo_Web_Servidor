<h1>Estructura Switch</h1>

<?php

// rand (a,b) => numero aleatorio entre a y b

$numero =rand(1,4);
/*echo "el numero es $numero";*/

switch($numero){
    case 1:
        echo "<p>$numero es igual a 1</p>";
        break;
    case 2:
        echo "<p>$numero es igual a 2</p>";
        break;
    case 3:
        echo "<p>$numero es igual a 3</p>";
        break;
    default:
        echo "<p>$numero es igual a 4</p>";
        
}

/*Hacer el ejercicio de las notas con switch*/

    $alumno= "Marta";
    $nota=10;

    switch($nota){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<p>$alumno está suspenso</p>";
            break;
        case 5:
        case 6:
            echo "<p>$alumno está aprobado</p>";
            break;
        case 7:
        case 8:
            echo "<p>$alumno tiene un notable</p>";
            break;
        case 9:
        case 10:
            echo "<p>$alumno tiene un sobresaliente</p>";
            break;
        default:
            echo "<p>la nota no es valida</p>";
        
    }

?>