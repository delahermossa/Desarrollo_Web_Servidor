<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellidos = depurar($_POST["apellidos"]);
        $temp_dni = depurar($_POST["dni"]);
        $temp_email = depurar($_POST["email"]);
        $temp_nacimiento = depurar($_POST["nacimiento"]);


        if (empty($temp_nombre)) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras";
            } else {
                if (strlen($temp_nombre) > 30) {
                    $err_nombre = "El nombre no puede contener mas de 30 caracteres";
                } else {
                    //exito
                    $nombre = $temp_nombre;
                    echo "<p>$nombre</p>";
                }
            }
        }
        if (empty($temp_apellidos)) {
            $err_apellidos = "Los apellidos son obligatorios";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_apellidos)) {
                $err_apellidos = "Los apellidos solo pueden contener letras";
            } else {
                $apellidos = $temp_apellidos;
                echo "<p>$apellidos</p>";
            }
        }

        if (empty($temp_dni)) {
            $err_dni = "el dni no puede estar vacío";
        } else {
            $patterndni = "/^[0-9]{8}[a-zA-Z]{1}+$/";

            if (!preg_match($patterndni, $temp_dni)) {
                $err_dni = "el dni no tiene 8 digitos y una letra";
            } else {
                $dni = $temp_dni;
                echo "<p>$dni</p>";
            }
        }

        /**
         * VALIDAR: Con expresion regular
         * -Email (con filter_var)
         *-Fecha nacimiento (sin input date)
         * dia/mes/año
         * (2 num/2 num/ 4 num)
         * 02/12/2022
         * - El dia solo puede empezar por 0 1,2 o 3
         * -El mes solo puede empezar por 0 o 1
         * -Y el año por
         */


        $email = filter_var($temp_email, FILTER_VALIDATE_EMAIL);
        if (empty($email)) {
            $err_email = "El email es obligatorio";
        } else {

            if (!$email) {
                $err_email = "El email no es válido";
            } else {
                $email = $temp_email;
                echo "<p>$email</p>";
            }
        }

        /**
         * Validar nacimiento
         */

        if (empty($temp_nacimiento)) {
            $err_nacimiento = "Tu fecha de nacimiento es obligatoria";
        } else {
            $pattern = "/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";
            if (!preg_match($pattern, $temp_nacimiento)) {
                $err_nacimiento = "Tu fecha de nacimiento debe tener el formato 02/02/2222";
            } else {
                $nacimiento = $temp_nacimiento;
                echo "<p>$nacimiento</p>";
            }
        }
    }


    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    ?>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Nuevo usuario</h2>

                <form action="" method="post">
                    <div>
                        <label class="form-label">Nombre:</label>
                        <input class="form-control" type="text" name="nombre">
                        <span class="error">
                            <?php
                            if (isset($err_nombre)) echo $err_nombre;


                            ?>
                        </span>
                    </div>

                    <div>
                        <label class="form-label">Apellidos: </label>
                        <input class="form-control" type="text" name="apellidos">
                        <span class="error">
                            <?php
                            if (isset($err_apellidos)) echo $err_apellidos;


                            ?>
                        </span>
                    </div>

                    <div>
                        <label class="form-label">DNI:</label>
                        <input class="form-control" type="text" name="dni">
                        <span class="error">
                            <?php
                            if (isset($err_dni)) echo $err_dni;


                            ?>
                        </span>
                    </div>


                    <div>
                        <label class="form-label">Email:</label>
                    </div>
                    <div class="input-group">
                        <!---->
                        <span class="input-group-text" id="inputGroupPrepend">@
                            <?php
                            if (isset($err_email)) echo $err_email;


                            ?>
                        </span>

                        <input class="form-control" type="text" name="email">
                    </div>

                    <div>
                        <label class="form-label"> Fecha nacimiento: </label>
                        <input class="form-control" type="text" name="nacimiento">
                        <span class="error">
                            <?php
                            if (isset($err_nacimiento)) echo $err_nacimiento;


                            ?>
                        </span>
                    </div>


                    <button type="submit" class="btn btn-primary">Enviar</button>


                </form>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>