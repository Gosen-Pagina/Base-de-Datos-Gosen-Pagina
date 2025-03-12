<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
    <link rel="stylesheet" href="Estilos/formulario.css">
  
</head>
<body>
    <div class="container">
        <h2>Registro de Producto</h2>
        <form action="Base-de-datos/registro.php" >
            <label for="idProducto">ID Producto:</label>
            <input type="text" id="idProducto" name="idProducto" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="sabor">Sabor:</label>
            <input type="text" id="sabor" name="sabor" required>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" min="0" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <button type="submit">Registrar Producto</button>
        </form>
     

    </div>   
  
</body>
</html>
