<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
        body{
            margin: auto;
            width: fit-content;
            text-align: center;
        }

    </style>
</head>

<body>
    <table>
        <tr>
            <th>Fecha</th>
            <th>Max (°C)</th>
            <th>Min (°C)</th>
        </tr>
        <?php
        $ciudad = $_POST["municipio"];

        if ($ciudad == "Fuenlabrada") {
            $xml = file_get_contents('https://www.aemet.es/xml/municipios/localidad_28058.xml');
        } elseif ($ciudad == "Leganes") {
            $xml = file_get_contents('https://www.aemet.es/xml/municipios/localidad_28074.xml');
        } elseif ($ciudad == "Alcorcon") {
            $xml = file_get_contents('https://www.aemet.es/xml/municipios/localidad_28007.xml');
        }

        if (isset($xml)) {
            $tiempoCiudad = simplexml_load_string($xml);
            echo "<h3>Temperatura de $ciudad</h3>";
            foreach ($tiempoCiudad->prediccion->dia as $day) {
                $fecha = $day["fecha"];
                $maxTemp = $day->temperatura->maxima;
                $minTemp = $day->temperatura->minima;

                echo <<<HTML

                <tr>
                <td>$fecha</td>
                <td>$maxTemp °C</td>
                <td>$minTemp °C</td>
                </tr>
                
                HTML;
            }
        }
        ?>

    </table>

    <a href="Index.html">Volver a Index</a>
</body>

</html>