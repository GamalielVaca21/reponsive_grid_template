<?php
    $conexion = new mysqli("localhost","root","","tienda");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion";
    }

?>