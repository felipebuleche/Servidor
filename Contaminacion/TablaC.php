<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        text-align: center;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 80%;
        max-width: 800px;
        background-color: #fff;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

</head>
<body>
<?php
    $archivo = fopen('horario.csv', 'r');
    fgets($archivo);
    $estacion = [
        '1' => 'Pº. Recoletos',
        '2' => 'Glta. de Carlos V',
        '3' => 'Pza. del Carmen',
        '4' => 'Pza. de España',
        '5' => 'Barrio del Pilar',
        '6' => 'Pza. Dr. Marañón',
        '7' => 'Pza. M. de Salamanca',
        '8' => 'Escuelas Aguirre',
        '9' => 'Pza. Luca de Tena',
        '10' => 'Cuatro Caminos',
        '11' => 'Av. Ramón y Cajal',
        '12' => 'Pza. Manuel Becerra',
        '13' => 'Vallecas',
        '14' => 'Pza. Fdez. Ladreda',
        '15' => 'Pza. Castilla',
        '16' => 'Arturo Soria',
        '17' => 'Villaverde Alto',
        '18' => 'C/ Farolillo',
        '19' => 'Huerta Castañeda',
        '20' => 'Moratalaz',
        '21' => 'Pza. Cristo Rey',
        '22' => 'Pº. Pontones',
        '23' => 'Final C/ Alcalá',
        '24' => 'Casa de Campo',
        '25' => 'Santa Eugenia',
        '26' => 'Urb. Embajada (Barajas)',
    ];
    
    $magnitud = [
        '1' => 'Dióxido de Azufre',
        '6' => 'Monóxido de Carbono',
        '7' => 'Monóxido de Nitrógeno',
        '8' => 'Dióxido de Nitrógeno',
        '9' => 'Partículas < 2.5 µm',
        '10' => 'Partículas < 10 µm',
        '12' => 'Óxidos de Nitrógeno',
        '14' => 'Ozono',
        '20' => 'Tolueno',
        '30' => 'Benceno',
        '35' => 'Etilbenceno',
        '37' => 'Metaxileno',
        '38' => 'Paraxileno',
        '39' => 'Ortoxileno',
        '42' => 'Hidrocarburos totales (hexano)',
        '43' => 'Metano',
        '44' => 'Hidrocarburos no metánicos (hexano)',
    ];
    
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Estación</th>';
    echo '<th>Magnitud</th>';
    for ($i = 1; $i <= 24; $i++) {
        echo '<th>H' . $i . '</th>';
    }
    echo '</tr>';
    
    while (($linea = fgetcsv($archivo, 1000, ';')) !== false) {
        $nombreEstacion = $estacion[$linea[2]] ?? 'Null';
        $nombreMagnitud = $magnitud[$linea[3]] ?? 'Null';
    
        echo '<tr>';
        echo '<td>' . $nombreEstacion . '</td>';
        echo '<td>' . $nombreMagnitud . '</td>';
        for ($i = 7; $i <= 54; $i += 2) {
            echo '<td>' . $linea[$i] . '</td>';
        }
        echo '</tr>';
    }
    
    fclose($archivo);
    echo '</table>';
    ?>


</body>
</html>

