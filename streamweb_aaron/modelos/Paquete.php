<?php
class Paquete {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM paquetes";
        $result = $this->conn->query($query);
        return $result; 
    }

    public function agregarPaquete($nombre, $descripcion, $precio) {
        $query = "INSERT INTO paquetes (nombre, descripcion, precio) 
                  VALUES ('$nombre', '$descripcion', '$precio')";
        return $this->conn->query($query); 
    }

    public function obtenerPaquetePorId($id) {
        $query = "SELECT * FROM paquetes WHERE id = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc(); 
    }

    public function actualizarPaquete($id, $nombre, $descripcion, $precio) {
        $query = "UPDATE paquetes SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio' WHERE id = $id";
        return $this->conn->query($query); 
    }

    public function eliminarPaquete($id) {
        $query = "DELETE FROM paquetes WHERE id = $id";
        return $this->conn->query($query);
    }
}
?>

