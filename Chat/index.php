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
    
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label for="username">Usuario</label><br>
        <input type="text" name="username" required><br>
        <label for="password">Contraseña</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Log in</button><br>
        <?php
        //if (!isset($_SESSION['username'])) {
        //    echo'<h4>El usuario y/o la contraseña son incorrectos.</h4>';
        //}
        ?>
    </form>
    <h3>No tienes cuenta?<a href="register.php">Registrate</a></h3>

</body>

</html>

