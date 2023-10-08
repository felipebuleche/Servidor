<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadernillo Rubio</title>
    <style>
        body{
            margin: auto;
            width: fit-content;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Cuadernillo de Rubio</h1>
    
    <?php
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);

    $operacion = rand(1, 4);

    $respuesta_correcta = 0;

    switch ($operacion) {
        case 1:
            $respuesta_correcta = $num1 + $num2;
            echo "$num1 + $num2=";
            break;
        case 2:
            $respuesta_correcta = $num1 - $num2;
            echo "$num1 - $num2=";
            break;
        case 3:
            $respuesta_correcta = $num1 * $num2;
            echo "$num1 * $num2=";
            break;
        case 4:
            $num2 = rand(1, 5);
            $respuesta_correcta = $num1 / $num2;
            echo "$num1 ÷ $num2=";
            break;
    }

    echo "<form action='sacaResultados.php' method='post'>";
    echo "<input type='hidden' name='respuesta_correcta' value='$respuesta_correcta'>";
    echo "<input type='number' name='respuesta_usuario'>";
    echo "<input type='submit' value='Verificar'>";
    echo "</form>";

    echo "<form action='Cuadernillo.php' method='post'>";
    echo "<input type='submit' value='Nueva Operación'>";
    echo "</form>";
    ?>   
</body>
</html>

