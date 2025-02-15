<?php 
include 'menu.php';
session_start();

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'funciones.php';

    $nombre = sanitizar($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensaje = sanitizar($_POST['mensaje']);

    if ($nombre && $email && $mensaje) {
        echo "<p class='success'>Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.</p>";
    } else {
        echo "<p class='error'>Error: Por favor completa todos los campos correctamente.</p>";
    }
}
?>

<h1>Contacto</h1>
<p>Si tienes dudas o sugerencias, completa el formulario y te responderemos lo mas pronto.</p>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    
    <label>Email:</label>
    <br>
    <input type="email" name="email" required>
    
    <label>Mensaje:</label>
    <textarea name="mensaje" rows="5" required></textarea>
    
    <button type="submit">Enviar</button>
</form>

<footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Gestor de Libros. Todos los derechos reservados.</p>
    </footer>