<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE productos SET nombre='$nombre', precio='$precio', descripcion='$descripcion' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: productos.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bodyProduc">

    <header>
        <img src="imagenes/logo.png" class="logo">
        <h1>GameTech</h1>
        <a href="productos.php"><button>Volver</button></a>
    </header>
    <h2>Editar Producto</h2>
    <form action="" method="post" class="product">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $row['nombre']; ?>" required>
        <label>Precio:</label>
        <input type="number" name="precio" value="<?= $row['precio']; ?>" step="0.01" required>
        <label>Descripción:</label>
        <textarea name="descripcion" required><?= $row['descripcion']; ?></textarea>
        <button type="submit"> Acutualizar</button>
    </form>
</body>
</html> 