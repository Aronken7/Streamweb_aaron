<?php
require_once "config/class_conexion.php"; 
require_once(__DIR__ . '/../modelos/Usuario.php');

class UsuarioController {
    private $conexion;
    private $usuarioModel;

    public function __construct() {
        $this->conexion = new Conexion(); 
        $this->usuarioModel = new Usuario($this->conexion->conn); 
    }
    public function listarUsuarios() {
        $usuarios = $this->usuarioModel->obtenerTodos();
        include "vistas/listar_usuarios.php"; 
    }

    public function registrarUsuario($nombre, $apellido, $email, $edad, $planBase, $paqueteAdicional, $duracion) {
        
        if ($this->usuarioModel->emailExiste($email)) {
            echo "El correo electrónico ya está registrado";
            return;
        }

        $this->usuarioModel->agregarUsuario($nombre, $apellido, $email, $edad, $planBase, $paqueteAdicional, $duracion);

        header("Location: ../index.php"); 
        exit();  
    }

    public function eliminarUsuario($id) {
        $this->usuarioModel->eliminarUsuario($id);

        header("Location: /streamweb_aaron/index.php");
        exit();
         
    }
}
?>



