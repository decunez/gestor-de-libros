<?php 
include 'menu.php';
session_start();
?>

<h1>Listado de Libros</h1>

<table border="1">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Acciones</th>
    </tr>

    <?php
    if (!empty($_SESSION['libros'])) {
        foreach ($_SESSION['libros'] as $index => $libro) {
            echo "<tr>
                <td>{$libro['titulo']}</td>
                <td>{$libro['autor']}</td>
                <td>{$libro['precio']}</td>
                <td>{$libro['cantidad']}</td>
                <td>
                    <a href='editar.php?index={$index}'>Editar</a> |
                    <a href='eliminar.php?index={$index}'>Eliminar</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay libros registrados.</td></tr>";
    }
    ?>
</table>
