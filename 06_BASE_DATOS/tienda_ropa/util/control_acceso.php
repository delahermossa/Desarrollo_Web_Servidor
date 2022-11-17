<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: http://localhost/06_base_datos/tienda_ropa/public/iniciar_sesion.php");
}


?>