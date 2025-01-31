<?php
require_once(__DIR__ . '/../config/class_conexion.php');
$conexion = new Conexion();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error al eliminar usuario.";
    }

    $stmt->close();
}

$conexion->close();
?>


