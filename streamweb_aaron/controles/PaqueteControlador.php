<?php
require_once "config/class_conexion.php"; 
require_once "modelos/Paquete.php"; 

class PaqueteController {
    private $conexion;
    private $paqueteModel;

    public function __construct() {
        $this->conexion = new Conexion(); 
        $this->paqueteModel = new Paquete($this->conexion->conn); 
    }

    
    public function listarPaquetes() {
        $paquetes = $this->paqueteModel->obtenerTodos();
        include "views/paquetes/listar.php"; 
    }

    
    public function agregarPaquete($nombre, $descripcion, $precio) {
        $this->paqueteModel->agregarPaquete($nombre, $descripcion, $precio);
        header("Location: listar_paquetes.php"); 
    }
}
?>
