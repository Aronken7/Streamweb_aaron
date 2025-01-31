<?php
require_once(__DIR__ . '/../config/class_conexion.php');
$conexion = new Conexion();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $coste_mensual = $_POST['coste_mensual'];

    $conexion = new Conexion();
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, edad, coste_mensual) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $nombre, $email, $edad, $coste_mensual);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error al registrar usuario: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>





