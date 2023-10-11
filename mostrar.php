<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Tienda</title>
</head>

<body>
    <center>
        <tr>Equipo deportivo</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del producto</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("open.php");//base de datos
                    $consulta = "SELECT * FROM equipo"; //tabla
                    $resultado = $conexion->query($consulta);
                    while($row = $resultado->fetch_assoc()){
                ?>
                        <tr>
                            <td>   <?php echo $row['id'];   ?>   </td>
                            <td>   <?php echo $row['nom'];   ?>   </td>
                            <td>   <?php echo $row['pre'];   ?>   </td>
                    

                            <td>   <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']);  ?>"></td>                            
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>