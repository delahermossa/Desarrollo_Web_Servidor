<h1>Estructura IF</h1>

<?php

    $numero = 3;

    if($numero>0){
        echo "<p>El numero es positivo</p>";

    }else if($numero<0){
        echo "<p>El numero es negativo</p>";
    }else {
        echo "<p> El numero es 0 </p>";
    }

    if($numero % 2 == 0){
        echo "<p>el numero es par</p> ";
    }else{
        echo "<p>el numero es impar</p> ";
    }

    /**
     * Crear una variable $alumno y una variable $nota 
     * Mostrar por pantalla el nombre del alumno junto a su calificacion.
     * Su calificación será: 
     * - Suspenso si es menor que 5 y 6
     * - Notable si esta entre 7 y 8
     * - Sobresaliente si esta entre 9 y 10
     */

     $alumno= "Marta";
     $nota=15;

     if($nota >=0 && $nota < 5){
        echo "<p>$alumno está suspenso</p>";

     }else if($nota >= 5 && $nota < 7){
        echo "<p>$alumno está aprobado</p>";

     }else if($nota >=7 && $nota < 9){
        echo "<p>$alumno tiene un notable</p>";

     }else if ($nota >=9 && $nota<=10){
        echo "<p>$alumno tiene un sobresaliente</p>";

     }else{
        echo "<p>la nota no es valida</p>";
     }

     /*
        Credenciales correctas
        $usuario: "admin";
        $contrasena: "123";

        Si usuario y contraseña son correctos, mostrar el mensaje  sesion iniciada

        si usuario o contraseña son erroneos mostrar los mensajes adecuados

        Hay 3 casos
     
     */

    $usuario="admin";
    $contrasena=123;

    
      


?>