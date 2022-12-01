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

    <div class="container">
        <h3>Practica 03 Arrays</h3>
        <div class="row">
            <div class="col-6">
                <h4>Ejercicio 1</h4>
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

                        </tr>

                    <?php

                    }

                    ?>
                    <tr>
                        <th><?php echo "Total productos" ?></th>
                        <th><?php echo count($frutas) ?></th>



                    </tr>
                    <th><?php echo "Total "  ?></th>
                    <th><?php echo $precio_suma . "€" ?></th>



                    <tr>

                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h4>Ejercicio 2</h4>
                <table class="table table-secondary">
                    <tr>
                        <th>Nombre</th>
                        <th>Precio </th>
                        <th>Cantidad </th>
                        <th>Producto * Cantidad </th>

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
                <h4>Ejercicio 3</h4>
                <table class="table table-success">

                    <?php
                    $numeros = [];
                    for ($i = 1; $i <= 50; $i++) {
                        $numeros[$i] = $i;
                    }

                    foreach ($numeros as $i => $valor) {
                        if ($valor % 3 == 0) {

                            unset($numeros[$valor]);
                        }
                    }

                    ?>

                    <ul class="list-group">
                        <?php
                        foreach ($numeros as $valor) {
                        ?><li class="list-group-item"><?php echo $valor ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h4>Ejercicio 4</h4>
                <table class="table table-success">
                    <?php
                    $personas = [
                        ["Berta", "Ruiz", rand(0, 100)],
                        ["Alejandra", "Santiago", rand(0, 100)],
                        ["Juan", "Castilla", rand(0, 100)],
                    ];
                    ?>
                    <table class="table table-primary">
                       
                            <tr>
                                <th>Nombre </th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Estado</th>
                            </tr>
                            <?php
                            echo "<br><br>";
                            foreach ($personas as $persona) {
                                list($nombre, $apellido, $edad) = $persona;
                                $estado = edad($edad);

                            ?>
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $apellido ?></td>
                                    <td><?php echo $edad ?></td>
                                    <td><?php echo $estado ?></td>
                                </tr>

                            <?php
                            }
                            function edad(int $est_edad)
                            {
                                $estado = match (true) {
                                    $est_edad >= 18 and $est_edad < 65 => "Mayor de edad",
                                    $est_edad >= 65 => "Jubilado",
                                    default => "Menor de edad"
                                };
                                return $estado;
                            }
                            ?>
                   
                    </table>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h4>Ejercicio 5</h4>
                <table class="table table-primary">
                <?php
                $personas = [
                    ['05709702k', 'Berta'],
                    ['05648930s', 'Lola'],
                    ['48695412p', 'Pablo'],
                ];
                ?>
                <br><br>
                <table class="table table-secondary">
                   
                        <tr>
                            <th>Dni</th>
                            <th>Nombre</th>
                            <th>Validación dni</th>
                            
                        </tr>

                        <?php
                        foreach ($personas as $persona) {
                            list($dni, $nombre) = $persona;
                        ?>
                            <tr>
                                <td><?php echo $dni ?></td>
                                <td><?php echo $nombre ?></td>
                                <td><?php dni_valido($dni) ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                        <?php
                        function dni_valido(string $temp_dni)
                        {
                            $letras = strtoupper(substr($temp_dni, -1));
                            $temp_dni = substr($temp_dni, 0, -1);
                            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni) == 8) {
                                echo "<p>DNI válido</p>";
                            } else {
                                echo "<p>DNI no válido</p>";
                            }

                            return $temp_dni ;
                        }

                        ?>
             
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>