<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO productos (nombre, precio, descripcion) VALUES ('$nombre', '$precio', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        header("Location: productos.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bodyProduc">
    <header>
        <img src="imagenes/logo.png" class="logo">
        <h1>GameTech</h1>
        <a href="productos.php"><button>Volver</button></a>
    </header>
    <h2>Agregar Nuevo Producto</h2>
    <form action="" method="post" class="product">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <button type="submit"> Guardar</button>
    </form>
</body>
</html> 