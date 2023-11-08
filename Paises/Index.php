<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            display: flex;
            flex-wrap: wrap;
        }
        .box {          
            border: 2px solid;
            width: fit-content;
            margin: 20px;
        }
    </style>
</head>


<body>
    <h1>Lista de Países</h1>
    <main>
    <?php
    $url = "https://restcountries.com/v3.1/all";
    $response = file_get_contents($url);
    $data = json_decode($response, true);


    foreach ($data as $country) {
        $country_name = $country['name']['common'];
        $capital = isset($country['capital'][0]) ? $country['capital'][0] : "No disponible";
        $google_maps_link = isset($country['capital'][0]) ? "https://www.google.com/maps/place/$capital" : "#";
        $flag = $country['flags']['png'];

        echo <<<HTML
            <div class="box">
            <div>
            <p><strong>Nombre del País:</strong> $country_name</p>
            <p><strong>Capital:</strong> $capital</p>
            <p><strong>Google Maps:</strong> <a href='$google_maps_link' target='_blank'>$capital en Google Maps</a></p>
            <p><strong>Bandera del País:</strong><br><img src='$flag' alt='Bandera de $country_name'></p>
            </div>
            </div>            
            HTML;
    }

    ?>
    </main>  

</body>

</html>