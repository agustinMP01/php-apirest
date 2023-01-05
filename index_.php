<?php
    require_once("index.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer formulario :)</title>
</head>
<body>
    <h1>Login</h1>
    <form action="valid.php" method="post">
        <p>Username: <input type="text" name="username" /></p>
        <p>Password: <input type="text" name="password" /></p>
        <p><input type="submit" /></p>
    </form>
</body>
</html>