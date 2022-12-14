<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Clientes index</title>
</head>

<body>
    <div class="container">
        <?php require '../../util/control_acceso.php' ?>

        <?php require '../../util/database.php' ?>

        <?php require '../header.php' ?>
        <br>
        <h1>Listado de clientes</h1>

        <div class="row">
            <div class="col-9">
                <br>
                <a class="btn btn-primary" href="insertar_cliente.php">Nuevo cliente</a>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Usuario</th>
                            <!--<th>Avatar</th>-->
                            <th>Nombre</th>
                            <th>Primer apellido</th>
                            <th>Segundo apellido</th>
                            <th>Fecha de nacimiento</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   //  Borrar prenda
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];

                            //  Consulta para coger la ruta de la imagen y luego borrarla
                            /*$sql = "SELECT avatar FROM clientes WHERE id = '$id'";
                                $resultado = $conexion -> query($sql);
                                if ($resultado -> num_rows > 0) {
                                    while ($fila = $resultado -> fetch_assoc()) {
                                        $avatar = $fila["avatar"];
                                    }
                                    unlink("../.." . $avatar);
                                }*/

                            //  Consulta para borrar la prenda
                            $sql = "DELETE FROM clientes WHERE id = '$id'";

                            if ($con->query($sql)) {
                        ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Se ha borrado el cliente
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Error al borrar el cliente
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <?php   //  Seleccionar todas las prendas
                        $sql = "SELECT * FROM clientes";
                        $resultado = $con->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row["id"];
                                $usuario = $row["usuario"];
                                $nombre = $row["nombre"];
                                $apellido1 = $row["apellido1"];
                                $apellido2 = $row["apellido2"];
                                $fechaNacimiento = $row["fechaNacimiento"];
                                $rol = $row["rol"];
                                //$avatar = $fila["avatar"];
                        ?>
                                <tr>
                                    <td><?php echo $usuario ?></td>
                                    <!--<td>
                                            <img width="50" height="60" src="../..<?/*php echo $avatar*/ ?>">
                                        </td>-->
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $apellido1 ?></td>
                                    <td><?php echo $apellido2 ?></td>
                                    <td><?php echo $fechaNacimiento ?></td>
                                    <td><?php echo $rol ?></td>

                                    <td>
                                        <form action="mostrar_prenda.php" method="get">
                                            <button class="btn btn-primary" type="submit">Ver</button>
                                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            <button class="btn btn-danger" type="submit">Borrar</button>
                                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <img width="200" heigth="200" src="../../resources/images/ropa.jpg">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>


</body>

</html>