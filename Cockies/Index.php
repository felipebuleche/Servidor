<?php
function obtenerProductos($categoria) {
    $productos = array();
    $archivo = fopen('productos.csv', 'r');
    while (($fila = fgetcsv($archivo, 0, ',')) !== FALSE) {
        if ($fila[0] == $categoria) {
            $productos[] = $fila;
        }
    }
    fclose($archivo);
    return $productos;
}

if (isset($_COOKIE['categoria_seleccionada'])) {
    $categoriaSeleccionada = $_COOKIE['categoria_seleccionada'];
    $productos = obtenerProductos($categoriaSeleccionada);
} else {
    $categoriaSeleccionada = null;
    $productos = array();
}

if (isset($_POST['categoria'])) {
    $categoriaSeleccionada = $_POST['categoria'];
    $productos = obtenerProductos($categoriaSeleccionada);

    setcookie('categoria_seleccionada', $categoriaSeleccionada, time() + 86400);
}

include('productos.php');
?>
