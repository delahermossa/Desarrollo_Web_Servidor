<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Nuevo Videojuego</title>
</head>

<body>

    <div class="container">
        <h1>Nuevo Videojuego</h1>
        <div class="row">
            <div class="col-6">
                <form action="./" method="get" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="text" name="precio">
                    </div>


                    <div class="form-group mb-3">
                        <select class="form-select" name="pegi">Pegi
                            <option selected>Selecciona una edad</option>
                            <option value="3">3</option>
                            <option value="7">7</option>
                            <option value="12">12</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                        </select>

                    </div>


                    <div class="form-group mb-3">
                        <label class="form-label">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Crear</button>
                    <a class="btn btn-secondary mt-3" href="./create.php">Volver</a>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>