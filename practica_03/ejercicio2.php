<?php
$frutas = [
    ["Melon", 2, 6],
    ["Sandía", 5, 8],
    ["Melocotón", 4, 9],
    ["Aguacate", 6, 5],
    ["Mango", 8, 8],
    ["Piña", 1, 2],
];

$nombre = array_column($frutas, 0); //con array_column extraigo la columna que quiero ordenar.
array_multisort($nombre, SORT_ASC, $frutas); //ordena por el título
$precio_suma = 0;
$cantidad_total = 0;

foreach ($frutas as $fruta) {
    list($nombre, $precio, $cantidad) = $fruta;
    $precio_total = $cantidad * $precio;
    $precio_suma = $precio_suma + $precio_total;
    $cantidad_total = $cantidad_total + $cantidad;

?>
    <tr>
        <td><?php echo $nombre ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $cantidad ?></td>
        <td><?php echo $precio_total ?></td>

        </td>

    </tr>

<?php

}

?>