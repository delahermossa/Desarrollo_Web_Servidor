<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04 Arrays</title>
</head>

<body>
    <table>
        <h2>Ejercicio 04 Arrays</h2>
        <h3>Tabla 1: Orden por defecto</h3>
        <?php
        //Crea un array multidimensional que contenga la siguiente información de series: título, plataforma y temporadas.
        //Crea al menos 5 series con sus respectivos títulos, plataforma y temporadas.
        //Muéstralos en tres tablas. Una los mostrará tal y como los has añadido, 
        //otra ordenados por temporada (de menor a mayor) y
        //otra ordenados por la plataforma a la que pertecenen, y si la plataforma es igual, por el título. 

        $series = [
            ["Vigilante", "Netflix", 2],
            ["Friends", "Netflix", 10],
            ["Juego de tronos", "HBO", 3],
            ["Como conocí a vuestra madre", "Netflix", 9],
            ["Dahmer", "Netflix", 1]
        ];



        //Cabecera de la tabla
        echo "<tr>";
        echo "<th>Título</th>";
        echo "<th>Plataforma</th>";
        echo "<th>Temporadas</th>";
        echo "</tr>";
        foreach ($series as $serie) {
            echo "<tr>";
            list($titulo, $plataforma, $temporadas) = $serie;
        

            //Contenido de la tabla
            echo "<td>" . $titulo . "</td>";
            echo "<td>" . $plataforma . "</td>";
            echo "<td>" . $temporadas . "</td>";
        }


        ?>
    </table>

    <table>
        <h3>Tabla 2: Ordenado por orden ascendente de temporadas</h3>
        <?php

        $temporadas = array_column($series, 2);
        array_multisort($temporadas, SORT_ASC, $series);

        //Cabecera de la tabla
        echo "<tr>";
        echo "<th>Título</th>";
        echo "<th>Plataforma</th>";
        echo "<th>Temporadas</th>";
        echo "</tr>";
        foreach ($series as $serie) {
            echo "<tr>";
            list($titulo, $plataforma, $temporadas) = $serie;
       

            //Contenido de la tabla
            echo "<td>" . $titulo . "</td>";
            echo "<td>" . $plataforma . "</td>";
            echo "<td>" . $temporadas . "</td>";
        }
        ?>

    </table>

    <table>

    <h3>Tabla 3: Ordenado por la plataforma a la que pertenecen</h3>
        <?php

        $plataforma= array_column($series, 1);
        $titulo= array_column($series, 0);

        array_multisort($plataforma, SORT_ASC,$titulo,SORT_ASC, $series);

        //Cabecera de la tabla
        echo "<tr>";
        echo "<th>Título</th>";
        echo "<th>Plataforma</th>";
        echo "<th>Temporadas</th>";
        echo "</tr>";
        foreach ($series as $serie) {
            echo "<tr>";
            list($titulo, $plataforma, $temporadas) = $serie;


            //Contenido de la tabla
            echo "<td>" . $titulo . "</td>";
            echo "<td>" . $plataforma . "</td>";
            echo "<td>" . $temporadas . "</td>";
        }

        ?>
    </table>


</body>

</html>