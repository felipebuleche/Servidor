<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $checkPassword = $_POST['checkpassword'];

    if ($newPassword !== $checkPassword) {
        echo 'Las contraseñas no coinciden <h3><a href="register.php">Intentelo de nuevo</a></h3>';
    } else {

        $newUser = "\n".$newUsername . "," . $newPassword;
        $file = fopen('usuarios.csv', 'a');
        fwrite($file, $newUser);
        fclose($file);

        header('Location: index.php');
        exit();
    }
    ?>
</body>

</html>