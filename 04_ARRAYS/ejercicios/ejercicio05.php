<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05 Arrays</title>
</head>

<body>

    <?php

    //Crear un array de estudiantes y, aleatoriamente, asignarles una nota del 0 al 10. 
    //Mostrar los estudiantes en una tabla que contenga sus nombres,
    // la nota que han sacado y la calificación final (suspenso, aprobado, notable o sobresaliente).
    //Ordenar los estudiantes por orden alfabético.
    function calificacion(int $nota)
    {
        if ($nota < 5) {
            $calificacion = "Suspenso";
        } else if ($nota >= 5 && $nota < 7) {
            $calificacion = "Aprobado";
        } else if ($nota >= 7 && $nota < 9) {
            $calificacion = "Notable";
        } else {
            $calificacion = "Sobresaliente";
        }
        return $calificacion;
    }

    $estudiantes = [
        ["Luis", rand(0, 10)],
        ["Alfredo", rand(0, 10)],
        ["Elena", rand(0, 10)]
    ];
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Califiación</th>
        </tr>
        <?php
        foreach ($estudiantes as $estudiante) {
            list($nombre, $nota) = $estudiante;
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $nota ?></td>
                <td><?php echo calificacion($nota) ?>
                </td>
            </tr>
        <?php
        }

        ?>
</body>

</html>