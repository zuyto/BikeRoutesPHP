<?php

include ('Conexion.php');
$cnn = Conexion::getConexion();

try {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    
    
    
    
} catch (Exception $exc) {

    echo $exc->getTraceAsString();
}

