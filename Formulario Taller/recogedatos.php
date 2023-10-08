<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
        border:1px solid black;
        
        }
        body{
            margin: auto;
        width: fit-content;
        }


        
</style>
</head>
<body>
<h1>Datos del conductor</h1>


<table style="width:100%">
  
  <tr>
    <td>Nombre</td>
    <td><?php echo  $_POST["user_name"];?></td>
    
  </tr>
  <tr>
    <td>Matrícula</td>
    <td><?php echo  $_POST["uer_matri"];?></td>
    
  </tr>
  <tr>
    <td>Telefono</td>
    <td><?php echo  $_POST["uer_phone"];?></td>
    
  </tr>
  <tr>
    <td>Marca</td>
    <td><?php echo  $_POST["user_email"];?></td>
    
  </tr>
  <tr>
    <td>¿Usa seguro?</td>
    <td><?php echo  $_POST["user_marca"];?></td>
    
  </tr>
  
  <tr>
    <td>¿Hora de llamada?</td>
    <td>
        
    <?php
        $horas_llamada = [];

        if (isset($_POST["daytime1"])) {
        $horas_llamada[] = "Mañana";
        }

        if (isset($_POST["daytime2"])) {
    $horas_llamada[] = "Tarde";
        }

        if (isset($_POST["daytime3"])) {
    $horas_llamada[] = "Noche";
        }

        echo implode(', ', $horas_llamada);
?>
</td>
    
  </tr>
  
</table>
    
</body>
</html>