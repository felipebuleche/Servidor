<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $url = file_get_contents("https://dog.ceo/api/breeds/image/random");
    $deJson = json_decode($url);

    if ($deJson->status == "success") {
        $imagenPerro = $deJson->message;
        echo "<img src='$imagenPerro'alt='perro random'>";
    } else {
        echo "Error en la carga de la imagen.";
    }
?>

    
</body>
</html>