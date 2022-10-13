<h1>Ejercicios</h1>


<ul>

<?php
 /*  EJERCICIO 1
        Vamos a generar 10 números aleatorios
        entre 1 y 10
        Mostrar dichos números indicando si 
        son pares o impares
        Mostrarlos en una lista
    */
    for ($i = 1; $i <= 10; $i++):
        $numero_aleatorio = rand(1,10);
        if ($numero_aleatorio % 2 == 0):
            echo "<li>$numero_aleatorio es par</li>";
        else:
            echo "<li>$numero_aleatorio es impar</li>";
        endif;
    endfor;
?>
</ul>

