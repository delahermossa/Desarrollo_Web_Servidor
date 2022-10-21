<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Practica_01</title>
</head>

<body>
    <h1>Practica_01</h1>
    <p id="ej1">Ejercicio 1---- Números primos</p>
    <form action="#ej1" method="post">
        <label>Número A</label>
        <input type="text" name="numeroA"><br></br>
        <label>Número B</label>
        <input type="text" name="numeroB"><br></br>
        <input type="hidden" name="f" value="ej1">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["f"] == "ej1") {
            require 'funciones/primo.php';
            $longitud = $_POST["numeroA"];
            $inicial = $_POST["numeroB"];
            $contador = 1;



            for ($i = $inicial; $contador <= $longitud; $i++) {
                if (esPrimo($i)) {

                    echo "$i, ";
                    $contador++;
                }
            }
        }
    }

    ?>


    <br><br>


    <p id="ej2">Ejercicio 2---- DNI Válido</p>
    <form action="#ej2" method="post">
        <label>Inserte DNI</label>
        <input type="text" name="dni"><br></br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["f"] == "ej2") {
            require "funciones/dniValido.php";
            $dni = $_POST["dni"];
            if (dniValido($dni)) {
                echo "<p>El Dni $dni es valido</p>";
            } else {
                echo "<p>El Dni no es valido</p>";
            }
        }
    }
    ?>
    <br><br>

    <p id="ej3">Ejercicio 3----Tablas de multiplicar</p>
    <form action="#ej2" method="post">
        <label>Inserta un número</label>
        <input type="text" name="tabla"><br></br>
        <input type="hidden" name="f" value="ej3">
        <input type="submit" value="Enviar">
    </form>


</body>

</html>