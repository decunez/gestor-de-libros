<?php
session_start();
if (isset($_GET['index'])) {
    unset($_SESSION['libros'][$_GET['index']]);
}
header("Location: listado.php");
?>
