<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php


    /*$videojuegos =array(//Array videojuegos
        "juego1"=> "Cyberpink 2077",
        "juego2"=> "Minecraft",
        "juego3"=> "My Little Pony"
    );
    print_r($videojuegos);

    echo "<br><br>";

    $consolas =[ //Array consolas
        "consola1" =>"PS4",
        "consola2" =>"PS5",
        "consola3" =>"Nintendo",
    ];
    print_r($consolas);

    echo "<br><br>";

    //Ejercicio
    //Crea un array que tenga como keys los DNI de distintas personas y
    //como valores sus nombres e imprímelo. 
*/


    $personas = [ //Array personas
        "05709702K" => "Berta",
        "04567261S" => "Juan",
        "05486612M" => "Raul"
    ];
    print_r($personas);
    echo "<br><br>";

    //Añadimos persona con su clave
    $personas["014558785S"] = "Rodolfo";
    $personas["564165465H"] = "Ruperto";


    //Eliminamos persona
    unset($personas["05486612M"]);

    print_r($personas);

    echo "<br><br><br>";

    //MEDIANTE UN FOREACH MOSTRAR TODAS LAS PERSONAS Y SU DNI EN UNA TABLA

    ?>


    <table>
        <?php
        echo "<tr>";
        echo "<th>DNI</th>";
        echo "<th>Nombre</th>";
        echo "</tr>";
        foreach ($personas as $dni => $nombre) {
            echo "<tr>";
            echo "<td>" . $dni . "</td>";
            echo "<td>" . $nombre . "</td>";
        }

        echo "</tr>";
        ?>

    </table>

    <?php
    /*

    $series = [//Array series
        1 => 'El juego del calamar',
        '1' => 'La casa de papel',
        1.3 => 'Alice in borderland',
        true => 'The Witcher'
    ];
    print_r($series);

    echo $series[1];    //  Devuelve 'The Witcher'
    */

    echo "<br><br>";
    $series = [
        'El juego del calamar',
        'La casa de papel',
        'Alice in bonderland',
        'The witcher'


    ];

    //Inserta elementos al final del array
    array_push($series, "Cuéntame", "Dark");

    $series[] = "Big Bang Theory";

    //INsertar elemento en una clave predeterminada
    $series[10] = "La que se avecina";

    array_push($series, "Haikyuu");

    //Sobreescribe la posicion 10 y cambia "La que se avecina" por "Aqui no hay quien viva"
    $series[10] = "Aqui no hay quien viva";

    //Elimina la posición que le indicamos
    unset($series[10]);


    //Con este forech ordenamos en lista las series sin preocuparnos de los indices
    foreach ($series as $serie) {
        echo $serie . "<br><br>";
    }

    foreach ($series as $indice => $serie) {
        echo $indice . " => " . $serie . "<br><br>";
    }



    //Resetea las claves y asigna de 0 a la ultima posicion
    //Reordena si borramos elemntos del array
    //Solo utilizar cuando no nos importa la clave del array
    //De esta forma lo vamos a poder recorrer con un for y no va a darnos error
    //$series = array_values($series);

    print_r($series);
    ?>

    <!-- Bucle for para ordenar las series en una lista-->
    <h3>Array desordenado</h3>
    <ul>

        <?php
        asort($series);

        for ($i = 0; $i < count($series); $i++) {
        ?>
            <!-- echo "<ul>($series[$i])</ul>"; -->
            <li><?php echo $series[$i] ?></li>

        <?php
        }
        ?>

    </ul>

    <h3>Array ordenado</h3>
    <ul>

        <?php
        asort($series);
        foreach ($series as $s) {
            echo $s . "<br>";
        }

        ?>

    </ul>

    <!--Bucle while para las series-->
    <!--<ol>
        <?php
        /*
        $i=0;

        while ($i < count($series) {
            ?>
           <li><?php echo $series[$i] ?></li>

        
        <?php
         }
        $i++ 
        */

        ?>

    </ol>
        -->

    <?php
    echo "<br><br>";

    //Cuenta los elementos del array
    echo "Hay " . count($personas) . " personas en el array";

    ?>

    <?php

    //Comparacion de arrays

    $frutas1 = ["Melocoton", "Pera", "Uva"];
    $frutas2 = ["Uva", "kiwi", "Melocoton"];

    if ($frutas1 == $frutas2) {
        if ($frutas1 === $frutas2) {
            echo "<p>Las frutas son las mismas  y estan igual ordenadas</p>";
        } else {
            echo "<p>Las frutas  son las mismas y no estan igual ordenadas</p>";
        }
    } else {
        echo "<p>Las frutas no son las mismas</p>";
    }


    ?>
</body>

</html>