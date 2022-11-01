<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Practica_01</title>
</head>

<body>
    <div class="practica1y2">
        <h1>Practica_01</h1>
        <h2 id="ej1">Ejercicio 1---- Números primos</h2>
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


        <h2 id="ej2">Ejercicio 2---- DNI Válido</h2>
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

                if (comprobarDni($dni)) {
                    echo "<p>El Dni $dni es valido</p>";
                } else {
                    echo "<p>El Dni no es valido</p>";
                }
            }
        }
        ?>
        <br><br>





        <h2 id="ej3">Ejercicio 3----Tablas de multiplicar</h2>
    </div>
    <br><br>




    <!-- He realizado dos formas para hacer el ejercicio de las tablas de multiplicar
        PRIMERA FORMA:  -->


    <!---->


    <?php

    echo "<div class='tablas'>";
    for ($tabla = 1; $tabla <= 10; $tabla++) {
        echo "<div class='tabla'>";
        echo "<p><strong><td>Tabla del $tabla </td></strong></p>";
        echo "<br>";


        for ($numero = 1; $numero <= 10; $numero++) {
            echo $tabla . "x" . $numero . "=" . ($tabla * $numero) . "<br>";
        }
        echo "</div>";
    }
    echo "</div>";


    ?>

    <!-- SEGUNDA FORMA -->
    <!-- Tabla del 1-->
    <!-- <div class="01"> -->
    <?php
    /*
            echo "<div class='tabla01'>";
            echo "<strong>Tabla del 1<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                
                echo ("1x" . $i . "=" . $i * 1);
                echo "<br>";
            }
            echo "</div>";

            ?>
        </div>

        <!-- Tabla del 2-->
        <div class="02">

            <?php
            echo "<div class='tabla02'>";
            echo "<strong>Tabla del 2<br></strong>";

            for ($i = 1; $i <= 10; $i++) {
                echo ("2x" . $i . "=" . $i * 2);
                echo "<br>";
            }

            echo "</div>";

            ?>

        </div>

        <!-- Tabla del 3-->
        <div class="tabla3">

            <?php
            echo "<div class='tabla03'>";
            echo "<strong>Tabla del 3<br></strong>";
        
            for ($i = 1; $i <= 10; $i++) {
                echo ("3x" . $i . "=" . $i * 3);
                echo "<br>";
            }
            echo "</div>";

            ?>

        </div>

        <!-- Tabla del 4-->
        <div class="tabla4">

            <?php
            echo "<div class='tabla04'>";
            echo "<strong>Tabla del 4<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("4x" . $i . "=" . $i * 4);
                echo "<br>";
            }

            echo "</div>";

            ?>

        </div>

        <!-- Tabla del 5-->
        <div class="tabla5">

            <?php
            echo "<div class='tabla05'>";
            echo "<strong>Tabla del 5<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("5x" . $i . "=" . $i * 5);
                echo "<br>";
            }

            echo "</div>";
            ?>

        </div>

        <!-- Tabla del 6-->
        <div class="tabla6">

            <?php
            echo "<div class='tabla06'>";
            echo "<strong>Tabla del 6<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("6x" . $i . "=" . $i * 6);
                echo "<br>";
            }
            echo "</div>";

            ?>

        </div>

        <!-- Tabla del 7-->
        <div class="tabla7">

            <?php
            echo "<div class='tabla07'>";
            echo "<strong>Tabla del 7<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("7x" . $i . "=" . $i * 7);
                echo "<br>";
            }

            echo "</div>";


            ?>

        </div>

        <!-- Tabla del 8-->
        <div class="tabla8">

            <?php
            echo "<div class='tabla08'>";
            echo "<strong>Tabla del 8<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("8x" . $i . "=" . $i * 8);
                echo "<br>";
            }

            echo "</div>";


            ?>

        </div>

        <!-- Tabla del 9-->
        <div class="tabla9">

            <?php
            echo "<div class='tabla09'>";
            echo "<strong>Tabla del 9<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("9x" . $i . "=" . $i * 9);
                echo "<br>";
            }

            echo "</div>";


            ?>

        </div>

        <!-- Tabla del 10-->
        <div class="tabla10">

            <?php
            echo "<div class='tabla010'>";
            echo "<strong>Tabla del 10<br></strong>";
            for ($i = 1; $i <= 10; $i++) {
                echo ("10x" . $i . "=" . $i * 10);
                echo "<br>";
            }
            echo "</div>";
*/


    
    
    ?>

    </div>




</body>

</html>