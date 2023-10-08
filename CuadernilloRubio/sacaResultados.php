<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Resultado</title>
    <style>
        body{
            margin: auto;
            width: fit-content;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
<?php
$respuesta_correcta = $_POST['respuesta_correcta'];

$respuesta_usuario = $_POST['respuesta_usuario'];

if ($respuesta_usuario == $respuesta_correcta) {
    echo "Respuesta correcta.";
    echo "<form action='Cuadernillo.php' method='post'>";
    echo "<input type='submit' value='Siguiente operación'>";
    echo "</form>";
} else {
    echo "Respuesta incorrecta. Intentalo de nuevo.";
    echo "<form action='Cuadernillo.php' method='post'>";
    echo "</form>";
    echo "<button onclick='history.go(-1)'> Volver </button>"; // tiene que estar fuera del form porque si no el formularioo hace que se recarge la pagina
}
?>

</body>
</html>

