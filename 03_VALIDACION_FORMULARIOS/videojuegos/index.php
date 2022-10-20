<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
</head>

<body>
    <h2>Nuevo videojuego</h2>
    <?php

    /**
     * AÑADIR AL FORMULARIO DE VIDEOJUEGOS:
     * - Consola (select con al menos 4 opciones) (PS4, PS5, SWITCH...)
     * El select de consolas tendrá una opción por defecto vacía
     * - Descripción (area de texto con 255 caracteres máximo)
     * Añadir mensajes de error
     */


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //SOLICITAR EL TITULO Y PRECIO OBLIGATORIOS
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_precio = depurar($_POST["precio"]);
        $temp_descripcion= depurar($_POST["descripcion"]);


        if (isset($_POST["consola"])) {
            $temp_consola = depurar($_POST["consola"]);
        } else {
            $temp_consola = "";
        }
        if (empty($temp_consola)) {
            $err_consola = "La consola esta vacia";
        } else {
            $consola = $temp_consola;
        }
        $temp_descripcion = $_POST["descripcion"];
        //validacion de la descripcion

        if (empty($temp_descripcion)) {
           
        } else {
            if(strlen($temp_descripcion)>250){
                $err_descripcion = "La descripcion es obligatoria y no puede superar 250 caracteres";
            }else{
                $descripcion=$temp_descripcion;
            }
           
       
        }
    }

        if (empty($temp_titulo)) {
            $err_titulo = "El título es obligatorio";
            //$err_precio= "El precio es obligatorio";

        } else {
            //Validar que el titulo tenga como mucho 40 caracteres
            if (strlen($temp_titulo) > 40) {
                echo $temp_titulo;
                $err_titulo = "El titulo no puede contener mas de 40 caracteres";
            } else {
                //exito!
                $titulo = $temp_titulo;
            }
        }



        if (empty($temp_precio)) {
            $err_precio = "El precio es obligatorio";
        } else {
            $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);

            if (!$temp_precio) {
                $err_precio = "El precio deber ser un numero";
            } else {
                $temp_precio = round($temp_precio, 2);
                if ($temp_precio < 0) {
                    $err_precio = "El precio no puede ser negativo";
                } else if ($temp_precio >= 10000) {
                    $err_precio = "El precio no puede ser superior a 10000";
                } else {
                    //exito
                    $precio = $temp_precio;
                }
            }
        }

        if (isset($titulo) && isset($precio) && isset($consola)&& isset($descripcion)) {
            echo "<p>$titulo</p>";
            echo "<p>$precio</p>";
            echo "<p>$consola</p>";
            echo "<p>$descripcion</p>";

        }

        // PRIMERA FORMA
        //echo depurar($_POST["titulo"]);
        //echo "<br>";
        //echo depurar($_POST["precio"]);
        // echo htmlspecialchars($_POST["titulo"]);
        //echo "<br>";
        //echo htmlspecialchars($_POST["precio"]);


        //Trim es para evitar espacios indeseados introducidos por el usuario
        //var_dump(trim($_POST["titulo"]));

        //Striplashes evita que salgan las \ cuando ponemos caracteres especiales o acentos
        //var_dump(stripslashes($_POST["titulo"]));
    

    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    ?>

    <form action="" method="post">


        <p>Título:<input type="text" name="titulo">

            <span class="error">
                *<?php
                    if (isset($err_titulo)) echo $err_titulo;


                    ?>
            </span>

        </p>
        <p>Precio:<input type="text" name="precio">

            <span class="error">

                *<?php

                    if (isset($err_precio)) echo $err_precio;
                    ?>
            </span>
        </p>

        <p>Consola:<select name="consola">
                <option value="" selected disabled value="elige">Elige una consola</option>
                <option value="ps4">PS4</option>
                <option value="ps5">PS5</option>
                <option value="xbox">XBOX</option>
                <option value="switch">SWITCH</option>
            </select>
            <span class="error">

                *<?php

                    if (isset($err_consola)) echo $err_consola;
                    ?>
            </span>
            <br>

        </p>
        <p>Descripcion:<textarea type="descripcion"></textarea>

        <span class="error">

            *<?php

                if (isset($err_descripcion)) echo $err_descripcion;
                ?>
        </span>
        </p>

        


        <p><input type="submit" value="Crear"></p>
    </form>

</body>

</html>