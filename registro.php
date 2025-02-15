<?php 
include 'menu.php';
session_start();

// Inicializar la sesión si no existe
if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = [];
}

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'funciones.php';

    $titulo = sanitizar($_POST['titulo']);
    $autor = sanitizar($_POST['autor']);
    $precio = filter_var($_POST['precio'], FILTER_VALIDATE_FLOAT);
    $cantidad = filter_var($_POST['cantidad'], FILTER_VALIDATE_INT);

    if ($titulo && $autor && $precio > 0 && $cantidad > 0) {
        $_SESSION['libros'][] = [
            'titulo' => $titulo,
            'autor' => $autor,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        echo "<p>Libro registrado con éxito.</p>";
    } else {
        echo "<p>Error: Verifica los datos ingresados.</p>";
    }
}
?>

<form method="POST">
    <label>Título:</label>
    <input type="text" name="titulo" required>
    
    <label>Autor:</label>
    <input type="text" name="autor" required>
    
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" required>
    
    <label>Cantidad:</label>
    <input type="number" name="cantidad" required>
    
    <button type="submit">Registrar</button>
</form>
