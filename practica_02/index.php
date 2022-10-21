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
        $temp_nacimiento = depurar($_POST["nacimiento"]);

        if (empty($temp_dni)) {
            $err_dni = "el dni no puede estar vacío";
        } else {
            //patron 8 numeros y una letra
            $pattern = "/^[0-9]{8}[a-zA-Z]{1}+$/";

            if (!preg_match($pattern, $temp_dni)) {
                $err_dni = "el dni no tiene 8 digitos y una letra";
            } else {
                $dni = $temp_dni;
                echo "<p>$dni</p>";
            }
        }

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
                    $nombre = ucwords(strtolower($temp_nombre));
                    echo "<p>$nombre</p>";
                }
            }
        }
        if (empty($temp_apellido1)) {
            $err_apellidos = "Primer apellido obligatorio";
        } else {
           
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_apellido1)) {
                $err_apellidos = "El apellido solo puede contener letras";
            } else {
                $apellidos =  ucwords(strtolower($temp_apellido1));
                echo "<p>$apellidos</p>" ;
            }
        }

        if (empty($temp_apellido2)) {
            $err_apellidos = "Tu segundo apellido es obligatorio";
        } else {
           
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_apellido2)) {
                $err_apellidos = "Los apellidos solo pueden contener letras";
            } else {
                $apellidos =  ucwords(strtolower($temp_apellido2));
                echo "<p>$apellidos</p>" ;
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

    function busca_edad($fecha_nacimiento){
        $dia=date("d");
        $mes=date("m");
        $ano=date("Y");
        
        
        $dianaz=date("d",strtotime($fecha_nacimiento));
        $mesnaz=date("m",strtotime($fecha_nacimiento));
        $anonaz=date("Y",strtotime($fecha_nacimiento));
        
        
        //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
        
        if (($mesnaz == $mes) && ($dianaz > $dia)) {
        $ano=($ano-1); }
        
        //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
        
        if ($mesnaz > $mes) {
        $ano=($ano-1);}
        
         //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
        
        $edad=($ano-$anonaz);
        
        
        return $edad;
        
        
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

        </p> Fecha nacimiento: <input type="text" name="nacimiento">
        <span class="error">
            *<?php
                if (isset($err_nacimiento)) echo $err_nacimiento;


                ?>
        </span>
        <p>

        </p>
        <p><input type="submit" value="Enviar"></p>


    </form>


</body>

</html>