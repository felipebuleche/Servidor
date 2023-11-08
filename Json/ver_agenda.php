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
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Agenda de Contactos</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>
        <?php
        $agendaJSON = file_get_contents('http://localhost/Json/agendajson.php');
        $agenda = json_decode($agendaJSON);

        if ($agenda !== null) {
            foreach ($agenda as $contacto) {
                echo '<tr>';
                echo '<td>' . $contacto->nombre . '</td>';
                echo '<td>' . $contacto->apellido . '</td>';
                echo '<td>' . $contacto->telefono . '</td>';
                echo '</tr>';
            }
        } else {
            echo "No se pudieron cargar los contactos de la agenda.";
        }
        ?>
    </table>
</body>
</html>