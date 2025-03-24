<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: productos.php");
    exit();
}
?>