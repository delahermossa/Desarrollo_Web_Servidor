<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
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
        $temp_dni= depurar($_POST["dni"]);


        if (empty($temp_nombre)) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras";
            } else {
                if(strlen($temp_nombre)>30){
                    $err_nombre="El nombre no puede contener mas de 30 caracteres";
                }
                else{
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

        if(empty($temp_dni)){
            $err_dni="el dni no puede estar vacío";
        }else{
            $patterndni="/^[0-9]{8}[a-zA-Z]{1}+$/";
            
            if(!preg_match($patterndni,$temp_dni)){
                $err_dni="el dni no es válido";
            }else{
                $dni=$temp_dni;
                echo "<p>$dni</p>";
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
        <p>Nombre: <input type="text" name="nombre">
            <span class="error">
                *<?php
                    if (isset($err_nombre)) echo $err_nombre;


                    ?>
            </span>
        </p>

        <p>Apellidos: <input type="text" name="apellidos">
            <span class="error">
                *<?php
                    if (isset($err_apellidos)) echo $err_apellidos;


                    ?>
            </span>
        </p>

        <p>DNI: <input type="text" name="dni">
            <span class="error">
                *<?php
                    if (isset($err_dni)) echo $err_dni;


                    ?>
            </span>



        </p>
        <p><input type="submit" value="Enviar"></p>


    </form>

</body>

</html>