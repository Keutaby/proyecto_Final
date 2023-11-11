<?php require 'registrar_control.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hash.css">
    <title>Hash</title>
</head>
<body>
    <form action="https://ileac-churn.000webhostapp.com/Figure/php/controlador.php" method="post" autocomplete="off">
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" id="" maxlength="10" required>

        <label for="">Password</label>
        <input type="password" name="password_usu" id="" maxlength="15" required>
        
        <button type="submit" name="registro">Registro</button>
    </form>
</body>
</html>