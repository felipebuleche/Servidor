<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,
    td {
      border: 1px solid black;

    }

    body {
      margin: auto;
      width: fit-content;
    }
  </style>
</head>

<body>
  <?php
  $file = fopen("datos.csv", "a");
  $nombre = $_POST["user_name"];
  $matricula = $_POST["uer_matri"];
  $tele = $_POST["uer_phone"];
  $email = $_POST["user_email"];
  $seguro = $_POST["send"];
  $daytime = "";  

  if (isset($_POST["daytime1"])) {
    $daytime .= "Mañana ";
  }

  if (isset($_POST["daytime2"])) {
    $daytime .= " Tarde ";
  }

  if (isset($_POST["daytime3"])) {
    $daytime .= " Noche";
  }

  $list = $nombre. ', '.$matricula. ', '.$tele. ', '.$email. ', '.$seguro.', '.$daytime;
  $list .= "\n";
  
  fwrite($file, $list);
  fclose($file);
  ?>
  <h1>Datos guardados</h1>

</body>

</html>