<h1>Estructura For</h1>
<ul>
<?php
/*for($i=1; $i <=10; $i++){
    echo"<li>$i</li>";
}
/* Mediante for  mostrar la secuencia */
 
for($i=5; $i <=50; $i++){
    if($i %5 ==0){
        echo"<li>$i</li>";
    }
}

/**
 * Generar dos numero aleatorios:
 * -uno entre 1 y 10 
 * -otro entre 11 y 20
 * 
 * Crear un bucle for que se ejecute entre el primer y el segundo numero:
 * 
 * a = 4
 * b = 12
 * 
 * Resultado:
 * 4
 * 5
 * 6
 * 7
 * ...
 * 
 * 12
 */


?>
</ul>

<br></br>
<ul>
<?php

    $a=rand(1,10);
    $b= rand(11,20);
    echo "<p>a = $a</p>";
    echo "<p>b= $b</p>";

    for ($i=$a; $i<= $b; $i++){
        echo "<li>$i</li>";
    }
?>
</ul>