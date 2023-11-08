<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: auto;
            width: 60%;
            width: fit-content;
        }

        h4 {
            color: red;
        }
    </style>
</head>

<body>
    <?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $error = "El ususario y/o la contraseña com imcorrectas.";

    $usuarios = array_map('str_getcsv', file('usuarios.csv'));
    foreach ($usuarios as $user) {
        if ($user[0] == $username && $user[1] == $password) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: chat.php');
            exit;
        }
    }





    //Si llegas aquí es que el usr no existe
//Para qe index.php sepa que ha habido un error, podemos:ç
//a) Poner la variebla de sesión "username" a 0 o a "error"
//b) Crearme una variable de sesion que se llame error
//Le mando al index.php
    ?>
</body>

</html>