<?php

class Conexion {

   
    public static function getConexion() {
        
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=bikeroutes", "root", " ");
            $conexion->exec("set names utf8");
            $conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo 'ERROR: ' . $ex->getMessage().'<br>' ;
            die('Error al conectar a la base de datos.');
        }
        return $conexion;
    }

}



