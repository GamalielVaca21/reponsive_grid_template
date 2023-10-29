<?php require 'controlador.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hash.css">
    <title>Registro</title>
</head>
<body>
    <form id="form1" action="" method="POST" autocomplete="off">
        <h1>Registro de Usuarios</h1>
        <span class="required notification">*Agregue sus datos</span>
        <br><br>
        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" pattern="[A-Za-z].{10,}" placeholder="10 A 13 caracteres" maxlength="13" required/>

        <label for="">Password</label>
        <input type="password" name="password_usu" id="">

        <button type="submit" name="registro">Registro</button>
    </form>
</body>
</html>
