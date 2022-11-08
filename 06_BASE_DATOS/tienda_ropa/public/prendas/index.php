<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php
    require "../header.php";
    ?>
    <?php
    require "../../util/database.php";
    ?>


    <div class="container">
        <h1>Listado de prendas</h1>
        <a class="btn btn-primary mb-3" href="insertar_prenda.php">Nueva prenda</a>
        
        <div class="row">
            <div class="col-9">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Nombre</th>
                            <th>Talla</th>
                            <th>Categoría</th>
                            <th>Precio</th>


                        </tr>

                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT*FROM prendas";
                        $resultado = $con->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $nombre = $row["nombre"];
                                $talla = $row["talla"];
                                $categoria = $row["categoria"];
                                $precio = $row["precio"];


                        ?>
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $talla ?></td>
                                    <td><?php echo $categoria ?></td>
                                    <td><?php echo $precio ?></td>


                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <img width="200" height="200" src="../../resources/ropa.jpg" alt="">

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>