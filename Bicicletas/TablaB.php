<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php
    $archivo = fopen('AccidentesBicicletas_2022.csv', 'r');
    fgetcsv($archivo);
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Fecha</th>';
    echo '<th>Localidad</th>';
    echo '<th>Tipo de Vehiculo</th>';
    echo '</tr>';

    while(($linea = fgetcsv($archivo, 1000, ';')) !== false){
        $fecha = $linea[1] ?? $linea[1];
        $localidad = $linea[3] ?? $linea[3];
        $tipoV = $linea[9] ?? $linea[9];

        echo '<tr>';
        echo '<td>'. $fecha .'</td>';
        echo '<td>'. $localidad.'</td>';
        echo '<td>'. $tipoV.'</td>';
        echo '</tr>';
    }
    
    fclose($archivo);
    echo '</table>';
    ?>
</body>
</html>