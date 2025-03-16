<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mi_tienda";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$nombre = mysqli_real_escape_string($conn, $nombre);
$email = mysqli_real_escape_string($conn, $email);
$telefono = mysqli_real_escape_string($conn, $telefono);

$sql = "INSERT INTO clientes (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registro exitoso. ¡Gracias por unirte!'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
