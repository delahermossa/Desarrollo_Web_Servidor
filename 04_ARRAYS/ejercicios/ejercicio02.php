<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02Arrays</title>
</head>
<body>
    <h2>Ejercicio 02 Arrays</h2>
    <?php
    //Genera 10 números aleatorios entre el 0 y el 100. Muéstralos ordenados de mayor a menor y de menor a mayor.  
    $numeros=[];

    for ($i=1; $i<=10; $i++){
        $numeros[]=rand(0,100);

    }
    
    ?>
    <h2>Numeros ordenados de mayor a menor</h2>
    <ul>
        <?php
        rsort($numeros);
        for ($i=0; $i < count($numeros) ; $i++) { 
            echo "<li>".$numeros[$i]."</li>";
            
        }
        ?>
    </ul>

    <h2>Numeros ordenados de menor a mayor</h2>
    <ul>
        <?php
        sort($numeros);
        for ($i=0; $i < count($numeros) ; $i++) { 
            echo "<li>".$numeros[$i]."</li>";
            
        }
        ?>
    </ul>
</body>
</html>