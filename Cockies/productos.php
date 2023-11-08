<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Selección de Categoría</h1>
    <form method="post">
        <label for="categoria">Selecciona una categoría:</label>
        <select name="categoria" id="categoria">
            <option value="camisetas" <?php if ($categoriaSeleccionada === 'camisetas') echo 'selected'; ?>>Camisetas</option>
            <option value="pantalones" <?php if ($categoriaSeleccionada === 'pantalones') echo 'selected'; ?>>Pantalones</option>
        </select>
        <input type="submit" value="Ver Productos">
    </form>

    <h2>Productos de la categoría <?php echo $categoriaSeleccionada; ?></h2>
    <ul>
        <?php foreach ($productos as $producto) { ?>
            <li>Categoría: <?php echo $producto[0]; ?>, Talla: <?php echo $producto[1]; ?>, Color: <?php echo $producto[2]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>