<h1>Respuesta al formulario 1</h1>

<?php
//Con el metodo GET podemos ver la url y con el metodo POST la url va oculta
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];

    echo "<p>$nombre</p>";
    echo "<p>$edad</p>";



?>