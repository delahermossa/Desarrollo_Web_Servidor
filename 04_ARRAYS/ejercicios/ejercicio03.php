<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio03Arrays</title>
</head>

<body>
    <h2>Ejercicio 03 Arrays</h2>
    <table>
        <?php
        //Dada la lista de países y sus capitales mostrada en la siguiente página,
        // muéstralos en una tabla ordenados por los nombres de sus países.

        $paises = [
            "Italy" => "Rome",
            "Luxembourg" => "Luxembourg",
            "Belgium" => "Brussels",
            "Denmark" => "Copenhagen",
            "Finland" => "Helsinki",
            "France" => "Paris",
            "Slovakia" => "Bratislava",
            "Slovenia" => "Ljubljana",
            "Germany" => "Berlin",
            "Greece" => "Athens",
            "Ireland" => "Dublin",
            "Netherlands" => "Amsterdam",
            "Portugal" => "Lisbon",
            "Spain" => "Madrid",
            "Sweden" => "Stockholm",
            "United Kingdom" => "London",
            "Cyprus" => "Nicosia",
            "Lithuania" => "Vilnius",
            "Czech Republic" => "Prague",
            "Estonia" => "Tallin",
            "Hungary" => "Budapest",
            "Latvia" => "Riga",
            "Malta" => "Valetta",
            "Austria" => "Vienna",
            "Poland" => "Warsaw"
        ];
        
        ksort($paises);
        echo "<tr>";
        echo "<th>País</th>";
        echo "<th>Capital</th>";
        echo "</tr>";
     
      
        foreach ($paises as $pais => $capital) {

            echo "<tr>";
            echo "<td>" . $pais . "</td>";
            echo "<td>" . $capital . "</td>";
        }

        
        echo "</tr>";

      
        ?>
    </table>

</body>

</html>