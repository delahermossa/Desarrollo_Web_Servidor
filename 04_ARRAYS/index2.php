<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
</head>

<body>
    <table>
        <?php
        echo "<h2>Arrays multidimensionales</h2>";

        $juegos = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Fighter", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castelvania", "Nintendo 64", 55],
        ];

        //Añadimos nuevo juego al array
        $nuevo_juego = ["Fruit Ninja", "PS4", 90];
        array_push($juegos, $nuevo_juego);

        //Eliminamos juego: Para esto indicamos la línea que queremos borrar
        unset($juegos[2]);


        //Ordenamos un array multidimensional: 
        //Primero extraemos al columna por la que vamos a ordenar (La 0 que es la del nombre)
        //Segundo indicamos en el array_multisort -la columna -Asc o desc -Array de juegos
        $titulo=array_column($juegos,0);
        $consola=array_column($juegos,1);//si quisieramos ordenar por consola

        array_multisort($titulo,SORT_ASC,$juegos);//Ordenamos por titulo ascendente
        array_multisort($consola,SORT_ASC,$titulo,SORT_DESC,$juegos); //Ordenamos consola asc y titulo desc



        //Cabecera de la tabla
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Consola</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        foreach ($juegos as $juego) {
            echo "<tr>";
            list($nombre, $consola, $precio) = $juego;
            echo "$nombre,$consola,$precio";
            echo "<br><br>";

            //Contenido de la tabla
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $consola . "</td>";
            echo "<td>" . $precio . "</td>";
        }


        ?>
    </table>

</body>

</html>