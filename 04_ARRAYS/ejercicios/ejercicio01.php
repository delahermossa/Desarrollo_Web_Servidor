<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01Arrays</title>
</head>
<body>
    <h2>Ejercicio_01 Arrays</h2>

    <?php

    //Crea un array que contenga los números pares del 1 al 50 y muéstralos.

   $numeros=[];

   for ($i=2; $i <=50 ; $i+=2) { 
    $numeros[]=$i;
  
   }


    ?>
    <ul>
        <?php

        for ($i=0; $i < count($numeros); $i++) { 
            ?>
            <li><?php echo $numeros[$i]?></li>
            <?php
            
        }
        ?>
    </ul>
    
</body>
</html>