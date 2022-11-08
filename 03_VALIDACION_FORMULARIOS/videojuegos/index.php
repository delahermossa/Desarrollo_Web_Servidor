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

        //para la imagen
        $file_name=$_FILES["imagen"]["name"];
        $file_temp_name =$_FILES["imagen"]["tmp_name"];
        $file_size =$_FILES["imagen"]["size"];
        $file_type=$_FILES["imagen"]["type"];

        //echo "<p>$file_name</p>";
        //echo "<p>$file_temp_name</p>";
        echo "<p>$file_size</p>";
        //echo "<p>$file_type</p>";

        /**
         * VALIDAR EL FICHERO INTRODUCIDO
         * -ES OBLIGATORIO INTRODUCIR UN FICHERO
         * -TIENE QUE SER UNA IMAGEN DE EXTENSION JPG,JPEG,PNG´-LA IMAGEN NO PUEDE
         * TENER MAS DE UN MG
         */

        //Aquí sacamos la extension del fichero
        /*$extension = pathinfo($file_name,PATHINFO_EXTENSION);
        echo "<p>La extension es $extension</p>";

        //Renombramos el archivo para guardarlo de forma ordenada en nuestra carpeta, diferente al nombre que le ha puesto el usuario

        $new_file_name="videojuego_". $temp_titulo. ".".$extension;

        //guardamos la imagen en la carpeta images con su nombre cyberpunk.jpg
        $path ="./images/".$new_file_name;*/

        //Validacion del fichero

        if(empty($file_name)){
            $err_imagen="la imagen no puede estar vacia";

        }else{
            $file_size=$_FILES["imagen"]["size"];

            if($file_size>1000000){
                $err_imagen="la imagen no puede pesar mas de 1 megabyte";
            }else{
                $extension = pathinfo($file_name,PATHINFO_EXTENSION);

                $extension_valida=match($extension){
                    "jpg"=>true,
                    "jpeg"=>true,
                    "png"=>true,
                    default=>false

                };
                if(!$extension_valida){
                    $err_imagen="La imagen solo puede ser .png,.jpeg, o .jpg";

                }else{
                    $new_file_name="videojuego_". $temp_titulo. ".".$extension;    

                    $path ="./images/".$new_file_name;

                    $file_temp_name=$_FILES["imagen"]["tmp_name"];

                    if(move_uploaded_file($file_temp_name,$path)){
                        echo "<p>Fichero movido con exito</p>";

                    }else{
                        echo "<p>Fracaso</p>";
                    }
                }
            }
        }


        

        /*if(move_uploaded_file($file_temp_name,$path)){
            echo"<p>Archivo movido con éxito</p>";
        }else{
            echo"<p>No se ha podido mover el ficher de la imagen</p>";
        }
*/
        //validacion de la descripcion

        if (empty($temp_descripcion)) {
           
        } else {
            if(strlen($temp_descripcion)>250){
                $err_descripcion = "La descripcion es obligatoria y no puede superar 250 caracteres";
            }else{
                $descripcion=$temp_descripcion;
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

    <form action="" method="post" enctype="multipart/form-data">


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
        <p>Descripcion:<textarea name="descripcion"></textarea>

        <span class="error">

            *<?php

                if (isset($err_descripcion)) echo $err_descripcion;
                ?>
        </span>
        </p>

        <p>Imagen:<input type="file" name="imagen">

        <span class="error">

            *<?php

                if (isset($err_imagen)) echo $err_imagen;
                ?>
        </span>
        </p>

        


        <p><input type="submit" value="Crear"></p>
    </form>

</body>

</html>