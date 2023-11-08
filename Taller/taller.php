<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulario Taller</h1>
    <form method="post" action="guardar.php">

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="user_name" placeholder="Martin" required /><br><br>


        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="uer_matri" placeholder="1234 LCB" required /><br><br>

        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" name="uer_phone" placeholder="655 56 76 75" required /><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="user_email" placeholder="ejemplo@gmail.com" required /><br><br>

        <label for="marca">Marca:</label>
        <select name="user_marca" id="marca" required>
            <?php
            $file = fopen("marcas.csv", "r");
            while (($data = fgetcsv($file)) !== false) {
            echo "<option value='" . $data[1] . "'>" . $data[0] . "</option>";
            }
            fclose($file);
            ?>
        </select>

        <p>Usa seguro</p>
        <input type="radio" id="secure" name="send" value="Sí usa seguro" checked>
        <label for="secure"> Sí usa seguro </label><br>
        <input type="radio" id="no_secure" name="send" value="No usa seguro">
        <label for="no_secure">No usa seguro </label><br>

        <p>Horas de llamada</p>
        <input type="checkbox" id="daytime1" name="daytime1" value="Mañana">
        <label for="daytime1"> Mañana</label><br>
        <input type="checkbox" id="daytime2" name="daytime2" value="Tarde">
        <label for="daytime2"> Tarde</label><br>
        <input type="checkbox" id="daytime3" name="daytime3" value="Noche">
        <label for="daytime3"> Noche</label><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>