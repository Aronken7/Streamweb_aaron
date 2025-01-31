<?php
require_once(__DIR__ . '/config/class_conexion.php');

class Usuario {
    private $nombre;
    private $email;
    private $edad;
    private $coste_mensual;
    

    public function guardar() {
        $conexion = new Conexion();
        $query = "INSERT INTO usuarios (nombre, email, edad, coste_mensual) 
                  VALUES ('$this->nombre', '$this->email', '$this->edad', '$this->coste_mensual')";
        
        if ($conexion->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
