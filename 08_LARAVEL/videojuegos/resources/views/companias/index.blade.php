<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Compañias Index</title>
</head>
<body>
   

   <div class="container">
    <h3>Listado de compañias</h3>
   <p>{{$mensaje}}</p>
    <div class="row">
      <div class="col-9">
        <div class="col-9">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Sede</th>
                        <th>Fecha de fundación</th>
                        
                    </tr>

                </thead>
                <tbody>

                    @foreach ($companias as $compania)
                    <tr>
                        <td>{{$compania->nombre}}</td>
                        <td>{{$compania->sede}}</td>
                        <td>{{$compania->fecha_fundacion}}</td>


                    </tr>
                    @endforeach

                </tbody>
            </table>
            <a class="btn btn-primary mt-3" href="{{route('companias.create')}}">Nueva compañia</a>
      </div>
    </div>
    
   </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>