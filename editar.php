<?php
include 'menu.php';
session_start();

if (isset($_GET['index']) && isset($_SESSION['libros'][$_GET['index']])) {
    $index = $_GET['index'];
    $libro = $_SESSION['libros'][$index];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'funciones.php';
        $_SESSION['libros'][$index] = [
            'titulo' => sanitizar($_POST['titulo']),
            'autor' => sanitizar($_POST['autor']),
            'precio' => filter_var($_POST['precio'], FILTER_VALIDATE_FLOAT),
            'cantidad' => filter_var($_POST['cantidad'], FILTER_VALIDATE_INT)
        ];
        header("Location: listado.php");
    }
} else {
    die("Libro no encontrado.");
}
?>

<form method="POST">
    <label>Título:</label>
    <input type="text" name="titulo" value="<?= $libro['titulo'] ?>" required>
    
    <label>Autor:</label>
    <input type="text" name="autor" value="<?= $libro['autor'] ?>" required>
    
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" value="<?= $libro['precio'] ?>" required>
    
    <label>Cantidad:</label>
    <input type="number" name="cantidad" value="<?= $libro['cantidad'] ?>" required>
    
    <button type="submit">Guardar Cambios</button>
</form>
