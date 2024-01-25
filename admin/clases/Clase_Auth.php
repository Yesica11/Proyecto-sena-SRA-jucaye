<?php
require_once "../includes/conexionbasedate.php";

//clase para autenticar usuarios

class Auth {
    protected PDO $conexion;
    public function __construct($conexion){
        $this->conexion = $conexion->conectar();
    }
}