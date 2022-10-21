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
            
            if (dniValido($dni)) {
                echo "<p>El Dni $dni es valido</p>";
            } else {
                echo "<p>El Dni no es valido</p>";
            }
        }

    }
    ?>
    <br><br>




    <div>
        <h2 id="ej3">Ejercicio 3----Tablas de multiplicar</h2>
       

        <br><br>
        <?php
        $multiplicando;
        $multiplicador;
        
        echo "<table text-align:center; border=5>";
        echo "<tr>";
        for ($tabla=1; $tabla<=10  ; $tabla++) { 
            echo "<td>Tabla del $tabla </td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
            for ($multiplicando=01; $multiplicando <=10 ; $multiplicando++) { 
                echo "<td>$multiplicando X $multiplicador =";
                echo ($multiplicando *$multiplicador);
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>


</body>

</html>