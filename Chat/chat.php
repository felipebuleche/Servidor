<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <style>
        body {
            margin: auto;
            width: 60%;
            width: fit-content;
        }
    </style>
</head>

<body>
    <div>
        <h2>Usuario,
            <?php session_start();
            echo $_SESSION['username']; ?>!
        </h2>
        <h3>Chat:</h3>
    </div>
    <?php
    if (!isset($_SESSION['username'])) {
        header('Location: index.php'); //Mandar al inicio
    
        exit();
    }
    ?>
    <form method="POST" action="chat_menssages.php">
        <textarea name="message" placeholder="Escriba aqui" rows="4" cols="30" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
    <div>
        <?php

        $chats = array_map('str_getcsv', file('mensajes.csv')); //Repetir usando explode
        foreach ($chats as $message) {
            //Pon un poco más bonito el mensaje
            echo "$message[0], $message[1]: $message[2]<br>";
        }
        ?>
    </div>


</body>

</html>