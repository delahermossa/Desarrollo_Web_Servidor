
<h1>Ejercicio 6</h1>

<?php

/**EJERCICIO 6:

Formulario que reciba un número y devuelva su factorial.

Factorial de 3: 1*2*3 = 6
Factorial de 5: 1*2*3*4*5 = 120

 */

$numero = $_GET["numero"];

$resultado = 1;

if ($numero >= 1) {
    for ($i = 1; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
        //  Sintaxis alternativa: $resultado *= $i;
    }
    echo "<p>$resultado</p>";
} else {
    echo "<p>El número debe ser igual o más que 1</p>";
}

?>