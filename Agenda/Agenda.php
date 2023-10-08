<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <style>
        body{
            margin: auto;
            width: fit-content;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php

        $nombre = $_POST["nombre"] ?? "";
        $apellido = $_POST["apellido"] ?? "";
        $telefono = $_POST["telefono"] ?? "";

        if ($nombre !== "" && $apellido !== "" && $telefono !== "") {
            $nuevoContacto = "$nombre,$apellido,$telefono\n";
            file_put_contents('contactos.csv', $nuevoContacto, FILE_APPEND);
        }
        $contactos = file('contactos.csv');
    ?>      
        
        <h2>Contactos:</h2>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
            </tr>
            <?php foreach ($contactos as $contacto) { ?>
                <?php list($nombre, $apellido, $telefono) = explode(',', $contacto); ?>
                <tr>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $apellido; ?></td>
                    <td><?php echo $telefono; ?></td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>