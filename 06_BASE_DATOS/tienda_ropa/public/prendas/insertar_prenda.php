<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar_prenda</title>
</head>

<body>
    <!-- Respuesta al formulario-->
    <?php

    /*EJERCICIO
- Elegir la talla con un select (XS, S, M, L, XL) (añadir check en la BD)
- Categoría con select (Camisetas, Pantalones, Accesorios) (añadir check en la BD)*/
    require "../../util/database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $talla = $_POST["talla"];
        $precio = $_POST["precio"];
        /**La categoria no es obligatoria en la tabla por lo que se podria poner o no */

        if(isset($_POST["categoria"])){
            $categoria=$_POST["categoria"];
        }else{
            $categoria="";
        }
      
        /**Aqui se completa categoria por lo que se inserta en la tabla la prenda con la categoria */
        if (!empty($nombre) && !empty($talla) && !empty($precio)) {
            if(!empty($categoria)){
                $sql = "INSERT INTO prendas (nombre, talla, precio, categoria) VALUES ('$nombre','$talla','$precio','$categoria')";

            }else{
                /**Aqui se inserta la prenda sin ka categoria ya que no es obligatoria en la tabla */
                $sql = "INSERT INTO prendas (nombre, talla, precio ) VALUES ('$nombre','$talla','$precio')";

            }
           

            if ($con->query($sql) == "TRUE") {
                echo "<p>Prenda insertada</p>";
            } else {
                echo "<p>La prenda no se ha insertado</p>";
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
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-select" name="talla">Talla
                            <option selected>Selecciona una talla</option>
                            <option value="S">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>

                    </div>


                    <div class="form-group mb-3">
                        <select class="form-select" name="categoria">Categoría
                            <option value="" selected disabled hidden>Selecciona una categoría</option>
                            <option value="camisetas">Camisetas</option>
                            <option value="pantalones">Patatalones</option>
                            <option value="accesorios">Accesorios</option>

                        </select>


                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="text" name="precio">

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