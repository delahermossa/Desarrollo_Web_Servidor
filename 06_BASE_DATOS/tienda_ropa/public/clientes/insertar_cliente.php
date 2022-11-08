<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar_cliente</title>
</head>

<body>
    <?php
    require "../../util/database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido_1"];
        $apellido2 = $_POST["apellido_2"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];

        /**La categoria no es obligatoria en la tabla por lo que se podria poner o no */

        if (isset($_POST["categoria"])) {
            $categoria = $_POST["categoria"];
        } else {
            $categoria = "";
        }

        /**Aqui se completa categoria por lo que se inserta en la tabla el cliente con el segundo apellido */
        if (!empty($usuario) && !empty($nombre) && !empty($apellido1)&& !empty($fecha_nacimiento)) {
            if (!empty($apellido2)) {
                $sql = "INSERT INTO clientes (usuario, nombre, apellido_1, apellido_2, fecha_nacimiento) VALUES ('$usuario','$nombre','$apellido1','$apellido2','$fecha_nacimiento')";
            } else {
                /**Aqui se inserta el cliente sin el segundo apellido ya que no es obligatorio en la bd */
                $sql = "INSERT INTO clientes (usuario, nombre, apellido_1, fecha_nacimiento) VALUES ('$usuario','$nombre','$apellido1','$fecha_nacimiento')";
            }

            if ($con->query($sql) == "TRUE") {
                echo "<p>Cliente insertado</p>";
            } else {
                echo "<p>El cliente no se ha insertado</p>";
            }
        }
    }
    ?>

    <div class="container">
        <h1>Nueva prenda</h1>
        <div class="row">
            <div class="col-6">

                <!--Formulario-->
                <form action="" method="post">

                    <div class="form-group mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" type="text" name="usuario">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Primer apellido</label>
                        <input class="form-control" type="text" name="apellido_1">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Segundo apellido</label>
                        <input class="form-control" type="text" name="apellido_2">
                    </div>


                    <div class="form-group mb-3">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input class="form-control" type="date" name="fecha_nacimiento">

                    </div>





                    <button class="btn btn-primary mt-3" type="submit">Crear</button>
                    <a class="btn btn-secondary mt-3" href="index.php">Volver</a>

                </form>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>