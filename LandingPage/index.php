<?php
include 'conexion.php';

// Obtener productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viwport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script defer src="java.js"></script>
    </head>

    <body>
        <header>
            <img src="imagenes/logo.png" class="logo">
            <h1>GameTech</h1>
            <a href="productos.php"><button>Ver productos</button></a>
        </header>

        <img src="imagenes/banner.png" class="banner">
        
        <section id="productos" class="productos fade-in">
            <h2>Productos Destacados</h2>
            <div class="productos-grid">
                <div class="producto">
                    <h3>Mouse Pad GX</h3>
                    <img src="imagenes/mousepad.jpeg" alt="">
                    <p>$50.000</p>
                </div>
                <div class="producto">
                    <h3>God of War Ragnarok</h3>
                    <img src="imagenes/gow.jpeg" alt="">
                    <p>$80.000</p>
                </div>

                <div class="producto">
                    
                    <h3>Cyberpunk 2077</h3>
                    <img src="imagenes/cyber.jpeg" alt="">
                    <p>$270.000</p>
                </div>
            </div>
        </section>

        <section class="registro fade-in">
            <h2>Regístrate Aqui</h2>
            <form action="registro.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
    
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">
    
                <button type="submit">Enviar</button>
            </form>
        </section>

        <footer class="footer">
        <p>&copy; 2025 Accesorios Tech & Gaming. Todos los derechos reservados.</p>
        <nav>
            <a href="https://www.sic.gov.co/ley-de-proteccion-de-datos">Política de privacidad</a>
            <a href="#">Volver al inicio</a>
        </nav>
    </footer>
    <script defer src="java.js"></script>
    </body>

</html>