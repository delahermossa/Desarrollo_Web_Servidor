<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 03 Arrays</title>
</head>

<body>
    <h3>Practica 03 Arrays</h3>


    <div class="row">
        <div class="col-6">
            <h4>Ejercicio 1--Tabla frutas</h4>
            <table class="table table-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Precio </th>

                </tr>

                <?php
                $frutas = [
                    ["Melon", 2],
                    ["Sandía", 5],
                    ["Melocotón", 4],
                    ["Aguacate", 6],
                    ["Mango", 8],
                    ["Piña", 1],
                ];

                $nombre = array_column($frutas, 0); //con array_column extraigo la columna que quiero ordenar.
                array_multisort($nombre, SORT_ASC, $frutas); //ordena por el título
                $precio_suma = 0;

                foreach ($frutas as $fruta) {
                    list($nombre, $precio) = $fruta;
                    $precio_suma = $precio_suma + $precio;

                ?>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td><?php echo $precio ?></td>

                        </td>

                    </tr>

                <?php

                }

                ?>
                <tr>
                    <th><?php echo "Total productos" ?></th>
                    <th><?php echo count($frutas) ?></th>


                </tr>
                <th><?php echo "Total " . $precio_suma . "€" ?></th>


                <tr>

                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
            <h4>Ejercicio 2--Tabla modificada</h4>
            <table class="table table-secondary">
                <tr>
                    <th>Nombre</th>
                    <th>Precio </th>
                    <th>Cantidad </th>
                    <th>Precio * Cantidad </th>

                </tr>

                <?php
                $frutas = [
                    ["Melon", 2, 6],
                    ["Sandía", 5, 8],
                    ["Melocotón", 4, 9],
                    ["Aguacate", 6, 5],
                    ["Mango", 8, 8],
                    ["Piña", 1, 2],
                ];

                $nombre = array_column($frutas, 0); //con array_column extraigo la columna que quiero ordenar.
                array_multisort($nombre, SORT_ASC, $frutas); //ordena por el título
                $precio_suma = 0;
                $cantidad_total = 0;

                foreach ($frutas as $fruta) {
                    list($nombre, $precio, $cantidad) = $fruta;
                    $precio_total = $cantidad * $precio;
                    $precio_suma = $precio_suma + $precio_total;
                    $cantidad_total = $cantidad_total + $cantidad;

                ?>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td><?php echo $precio ?></td>
                        <td><?php echo $cantidad ?></td>
                        <td><?php echo $precio_total ?></td>

                        </td>

                    </tr>

                <?php

                }

                ?>
                <tr>
                    <th><?php echo "Total productos adquiridos" . " " . $cantidad_total ?></th>

                </tr>
                <th><?php echo "Total " . $precio_suma . "€" ?></th>


                <tr>

                </tr>
            </table>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-6">
            <h4>Ejercicio 3--Array de números del 1 al 50</h4>
            <table class="table table-success">
                <tr>
                    <th>Numeros</th>

                </tr>

                <?php
                $numeros = [];

                for ($i = 1; $i <= 50; $i++) {
                    $numeros[] = $i;
                    for ($i = 0; $i < count($numeros); $i++) {
                ?>
                        <li><?php echo $numeros[$i] ?></li>
                        <?php


                        ?>

                <?php

                    }
                }




                ?>
                </tr>

                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>