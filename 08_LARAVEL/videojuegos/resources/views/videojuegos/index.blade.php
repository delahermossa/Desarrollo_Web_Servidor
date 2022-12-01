<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Index Videojuego</title>
</head>

<body>

    <div class="container">
        @include('header')
        <table>
            <h3>Listado videojuegos</h3>

            <?php


            /*if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["botonañadir"])) {
                $temp_titulo = $_GET["titulo"];
                $temp_precio = $_GET["precio"];
                $pegi = $_GET["pegi"];
                $temp_descripcion = $_GET["descripcion"];

                $arrayNuevo = [$temp_titulo, $temp_precio, $pegi, $temp_descripcion];

                $videojuegos[count($videojuegos) + 1] = $arrayNuevo;
            } */



            ?>
            <p>{{$mensaje}}</p>
            <div class="col-9">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Titulo</th>
                            <th>Precio</th>
                            <th>Pegi</th>
                            <th>Descripcion</th>
                        </tr>

                    </thead>
                    <tbody>

                        @foreach ($videojuegos as $videojuego)
                        <tr>
                            <td>{{$videojuego->titulo}}</td>
                            <td>{{$videojuego->precio}}</td>
                            <td>{{$videojuego->pegi}}</td>
                            <td>{{$videojuego->descripcion}}</td>


                        </tr>
                        @endforeach

                        {{-- <tr> --}}
                        <?php
                        /*

                        foreach ($videojuegos as $videojuego) {

                            list($nombre, $precio, $pegi, $descripcion) = $videojuego;

                            echo "<td>" . $nombre . "</td>";
                            echo "<td>" . $precio . "</td>";
                            echo "<td>" . $pegi . "</td>";
                            echo "<td>" . $descripcion . "</td>";

                            echo "</tr>";
                        }*/


                        ?>
                        {{-- </tr> --}}
                    </tbody>
                </table>
                <a class="btn btn-primary mt-3" href="{{route('videojuegos.create')}}">Nuevo juego</a>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>