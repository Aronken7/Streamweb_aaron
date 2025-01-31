<?php
include('class_conexion.php');
$conexion = new Conexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="http://localhost/streamweb_aaron/css/estilo.css">

</head>
<body>
    <h1>Gestión de Usuarios de Streamweb</h1>

    <h2>Agregar Usuario</h2>
    <form method="POST" action="controladores/usuario_controlador.php?action=agregar">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br>

    <label for="coste_mensual">Coste Mensual:</label>
    <input type="number" step="0.01" id="coste_mensual" name="coste_mensual" required><br>

    <input type="submit" value="Registrar">
</form>


    <h2>Lista de Usuarios</h2>
    <?php include(__DIR__ . '/../vistas/listar_usuarios.php'); ?>

    <script src="js/scripts.js"></script> 
</body>
</html>
