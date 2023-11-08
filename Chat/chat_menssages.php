<?php
session_start();
$message = $_POST['message'];
$username = $_SESSION['username'];
$datetime = date('Y-m-d H:i:s');

$file = fopen('mensajes.csv', 'a');
fputcsv($file, [$username, $datetime, $message]);
fclose($file);
header('location: chat.php');
?>