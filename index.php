<?php include 'menu.php';
?>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="stilos.css">

</head>
<body>
    <div class="container my-5">
        <div class="text-center">
            <h2>Bienvenido a nuestro sitio</h2>
            <p>Explora nuestros servicios y descubre lo que podemos ofrecerte.</p>
        </div>

        <div class="row gallery">
            <div class="col-md-4">
                <img src="https://imagenes.eleconomista.com.mx/files/image_768_768/uploads/2022/01/24/66e471e26ebf4.jpeg" alt="Imagen 1">
                <p>Descubre nuestros servicios empresariales.</p>
            </div>
            <div class="col-md-4">
                <img src="https://www.civitatis.com/blog/wp-content/uploads/2023/03/shutterstock_1585685068-scaled.jpg" alt="Imagen 2">
                <p>Innovamos con las últimas tecnologías.</p>
            </div>
            <div class="col-md-4">
                <img src="https://www.obsbusiness.school/sites/obsbusiness.school/files/inline-images/importancia-trabajo-en-equipo.jpg" alt="Imagen 3">
                <p>Trabajo en equipo para ofrecer lo mejor.</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Gestor de Libros. Todos los derechos reservados.</p>
    </footer>

</body>
</html>