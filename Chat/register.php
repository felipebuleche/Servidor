<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: auto;
            width: 60%;
            width: fit-content;
        }
    </style>
</head>

<body>
    <h2>Register</h2>
    <form method="POST" action="add_user.php">
        <label for="username">Usuario</label><br>
        <input type="text" name="username" required><br>
        <label for="password">Contraseña</label><br>
        <input type="password" name="password" required><br>
        <label for="checkpassword">Confirmar Contraseña</label><br>
        <input type="password" name="checkpassword" required><br>
        <button type="submit">Register</button>
    </form>
    <h3>Ya tienes una cuenta? <a href="index.php">Login</a></h3>

</body>

</html>