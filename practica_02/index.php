<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_02</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_dni = depurar($_POST["dni"]);
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellido1 = depurar($_POST["apellido1"]);
        $temp_apellido2 = depurar($_POST["apellido2"]);
        $temp_email = depurar($_POST["email"]);
        $temp_edad = depurar($_POST["edad"]);

        if (empty($temp_dni)) {
            $err_dni = "el dni no puede estar vacío";
        } else {
            //patron 8 numeros y una letra
            //********* falta validar que la letra sea correcta */
            $pattern = "/^[0-9]{8}[a-zA-Z]{1}+$/";

            if (!preg_match($pattern, $temp_dni)) {
                $err_dni = "el dni no tiene 8 digitos y una letra";
            } else {

                require "funciones/dniValido.php";

                if (comprobarDni($temp_dni)) {
                    echo "<p>El Dni $temp_dni es valido</p>";
                } else {
                    echo "<p>El Dni no es valido</p>";
                }


                $dni = $temp_dni;
                echo "<p>$dni</p>";
            }
        }

        if (empty($temp_nombre)) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            //patron para el nombre, lo que puede contener
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras";
            } else {
                if (strlen($temp_nombre) > 30) {
                    $err_nombre = "El nombre no puede contener mas de 30 caracteres";
                } else {
                    //exito
                    $nombre = ucwords(strtolower($temp_nombre));
                    echo "<p>$nombre</p>";
                }
            }
        }
        if (empty($temp_apellido1)) {
            $err_apellido1 = "Primer apellido obligatorio";
        } else {

            //patron para los apellidos, los caracteres que puede contener
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_apellido1)) {
                $err_apellidos = "El apellido solo puede contener letras";
            } else {
                $apellido1 =  ucwords(strtolower($temp_apellido1));
                echo "<p>$apellido1</p>";
            }
        }

        if (empty($temp_apellido2)) {
            $err_apellido2 = "Tu segundo apellido es obligatorio";
        } else {

            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_apellido2)) {
                $err_apellido2 = "Los apellidos solo pueden contener letras";
            } else {
                $apellido2 =  ucwords(strtolower($temp_apellido2));
                echo "<p>$apellido2</p>";
            }
        }



        $email = filter_var($temp_email, FILTER_VALIDATE_EMAIL);
        if (empty($email)) {
            $err_email = "El email es obligatorio";
        } else {

            if (!$email) {
                $err_email = "El email no es válido";
            } else {
                //Palabras malsonantes
                if (str_contains($temp_email, 'mierda') || str_contains($temp_email, 'cabron') || str_contains($temp_email, 'gilipollas')) {
                    $err_email = "El email no puede contener palabras malsonantes";
                } else {
                    $email = $temp_email;
                    echo "<p>$email</p>";
                }
            }
        }


        /**
         * Validamos edad
         */

        if (empty($temp_edad)) {
            $err_edad = "Tu edad es obligatoria";
        } else {
            if ($temp_edad < 0) {
                $err_edad = "Tu edad no puede ser menor que 0";
            } else {
                if ($temp_edad >= 18) {
                    echo "<p>Eres mayor de edad</p>";
                } else {
                    echo "<p>Eres menor de edad</p>";
                    $edad = $temp_edad;
                    echo "<p>$edad</p>";
                }
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


    <form action="" method="post">

        <p>DNI: <input type="text" name="dni">
            <span class="error">
                *<?php
                    if (isset($err_dni)) echo $err_dni;


                    ?>
            </span>

        </p>

        <p>Nombre: <input type="text" name="nombre">
            <span class="error">
                *<?php
                    if (isset($err_nombre)) echo $err_nombre;


                    ?>
            </span>
        </p>

        <p>Primer apellido: <input type="text" name="apellido1">
            <span class="error">
                *<?php
                    if (isset($err_apellido1)) echo $err_apellido1;


                    ?>
            </span>
        </p>

        <p>Segundo apellido: <input type="text" name="apellido2">
            <span class="error">
                *<?php
                    if (isset($err_apellido2)) echo $err_apellido2;


                    ?>
            </span>
        </p>



        <p> EMAIL: <input type="text" name="email">
            <span class="error">
                *<?php
                    if (isset($err_email)) echo $err_email;


                    ?>
            </span>

        <p> Edad: <input type="text" name="edad">
            <span class="error">
                *<?php
                    if (isset($err_edad)) echo $err_edad;


                    ?>
            </span>
        </p>

        </p>
        <p><input type="submit" value="Enviar"></p>


    </form>


</body>

</html>