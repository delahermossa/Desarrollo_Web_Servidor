<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva consola</title>
</head>
<body>
    <div class="container">
        <h1>Nueva consolas</h1>
        <div class="row">
            <div class="col-6">
                <form action="{{route('consolas.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Año de salida</label>
                        <input class="form-control" type="text" name="ano_salida">
                    </div>

                    
                    <div class="form-group mb-3">
                        <select class="form-select" name="generacion">Generación
                            <option selected disabled hidden>Selecciona una generación</option>
                            <option value="1ª">1ª</option>
                            <option value="2ª">2ª</option>
                            <option value="3ª">3ª</option>
                            <option value="4ª">4ª</option>
                            <option value="5ª">5ª</option>
                        </select>

                    </div>


                    <div class="form-group mb-3">
                        <label class="form-label">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit" name="botonañadir">Crear</button>
                    <!-- <a class="btn btn-secondary mt-3" href="./create.php">Volver</a> -->

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>