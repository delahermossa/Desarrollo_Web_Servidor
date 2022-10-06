<h1>Ejercicios</h1>
<ul>
<?php
echo "<p>Esto funciona</p>";

/* EJERCICIO 1
Vamos a generar 10 numeros aleatorios 
entre 1 y 10

Mostrar dichos numeros indicando si son pares o impares

Crear el ejercicio sin llaves en el for ni en el if
*/



for ($i=0; $i <= 10; $i++):
    $num=rand(1,10);

    if ($num %2 ==0):
        echo "<li>El numero $num es par</li>";
       
    else:
        echo "<li>El numero $num es impar</li>";
    
    endif;
 
endfor;

echo "<br>";

/**
 * EJERCICIO 2
 * Imprimir los múltiplos de 3 entre 0 y 30 en formato array
 * 
 * [3,6,9,...30]
 */


echo "Formato 1 (Bien hecho) <br>";
echo "[";
$string="";

for ($i=3; $i <=30 ; $i+=3) { 
  
   $string = $string . $i .",";
}
$string =substr($string, 0,strlen($string)-1);
echo $string;
echo "]<br>";

/*--------------------------------------------------*/ 

echo "<br>";

echo "Formato 2 (Mal hecho) <br>";

    echo "[";
    for ($i = 3; $i <= 30; $i+=3) {
        if ($i < 30) {
            echo "$i,";
        } else {
            echo "$i";
        }
        
    }
    echo "]";
?>

</ul>