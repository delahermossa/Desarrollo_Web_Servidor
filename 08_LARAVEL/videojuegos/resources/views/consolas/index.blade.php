<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Index de consolas</title>
</head>

<body>
 <div class="container">
    <div class="row">
        <div class="col-6">
            <table class="table table-striped table-hover">
                <thead class="table primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Año de salida</th>
                        <th>Generación</th>
                        <th>Descripción</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($consolas as $consola)
                    <tr>
                        <td>{{$consola->nombre}}</td>
                        <td>{{$consola->ano_salida}}</td>
                        <td>{{$consola->generacion}}</td>
                        <td>{{$descripcion->descripcion}}</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>