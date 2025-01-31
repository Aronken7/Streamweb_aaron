<?php
class Conexion extends mysqli {
    private $host = "localhost"; 
    private $usuario = "root";  
    private $contraseña = "curso";   
    private $base_de_datos = "streamweb"; 

    public function __construct() {
        parent::__construct($this->host, $this->usuario, $this->contraseña, $this->base_de_datos);
        if ($this->connect_error) {
            die("Conexión fallida: " . $this->connect_error);
        }
    }

    public function query(string $query, int $result_mode = MYSQLI_STORE_RESULT) {
        return parent::query($query, $result_mode);
    }

    public function fetch_assoc($result) {
        return $result->fetch_assoc();
    }

    public function close() {
        parent::close(); 
    }
    
}
?>



