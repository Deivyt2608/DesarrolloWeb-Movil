<?php
include 'conexion.php';

// Obtener productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>CRUD de Productos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <img src="imagenes/logo.png" class="logo">
        <h1>GameTech</h1>
        <a href="index.php"><button>Volver al inicio</button></a>
    </header>

    <h2 class="titulo2">Lista de Productos</h2>
    <div class="tabla">
        <a href="crear.php" class="btn">Agregar Producto</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nombre']; ?></td>
                    <td>$<?= $row['precio']; ?></td>
                    <td><?= $row['descripcion']; ?></td>
                    <td>
                        <a href="editar.php?id=<?= $row['id']; ?>" class="edit"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                        |
                        <a href="eliminar.php?id=<?= $row['id']; ?>" class="delete" onclick="return confirm('¿Estás seguro?');"><i class="fa-solid fa-trash"></i>Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>