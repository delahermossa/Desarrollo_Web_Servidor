<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Respuesta formulario 2</h1>
<ul>
<?php
//Crear un formulario que reciba un numero y habrá que generar una lista con
//tantos numeros como se haya indicado 

//Numero=3

$numero=$_GET["numero"];


for ($i=1; $i <=$numero; $i++) { 
    echo "<li><p>$i</p></li>"; 
}

?>
</ul>
</body>
</html>



