<?php
require_once(__DIR__ . '/../config/class_conexion.php');
$conexion = new Conexion();
$query = "SELECT * FROM usuarios";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    echo "<ul>";
    while ($usuario = $conexion->fetch_assoc($resultado)) {
        echo "<li>" . $usuario['nombre'] . " - " . $usuario['email'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay usuarios registrados";
}
?>



