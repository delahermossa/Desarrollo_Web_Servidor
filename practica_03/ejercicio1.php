<?php
                $frutas = [
                    ["Melon", 2],
                    ["Sandía", 5],
                    ["Melocotón", 4],
                    ["Aguacate", 6],
                    ["Mango", 8],
                    ["Piña", 1],
                ];

                $nombre = array_column($frutas, 0); //con array_column extraigo la columna que quiero ordenar.
                array_multisort($nombre, SORT_ASC, $frutas); //ordena por el título
                $precio_suma = 0;

                foreach ($frutas as $fruta) {
                    list($nombre, $precio) = $fruta;
                    $precio_suma = $precio_suma + $precio;

                ?>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td><?php echo $precio ?></td>

                        </td>

                    </tr>

                <?php

                }

                ?>