<?php
require_once(__DIR__ . '/../config/class_conexion.php');
$conexion = new Conexion();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conexion->query($query);
    $usuario = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $coste_mensual = $_POST['coste_mensual'];

    $stmt = $conexion->prepare("UPDATE usuarios SET nombre=?, email=?, edad=?, coste_mensual=? WHERE id=?");
    $stmt->bind_param("ssiii", $nombre, $email, $edad, $coste_mensual, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error al actualizar usuario.";
    }

    $stmt->close();
    $conexion->close();
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>

    <label>Edad:</label>
    <input type="number" name="edad" value="<?php echo $usuario['edad']; ?>" required><br>

    <label>Coste Mensual:</label>
    <input type="number" step="0.01" name="coste_mensual" value="<?php echo $usuario['coste_mensual']; ?>" required><br>

    <input type="submit" value="Actualizar">
</form>

