<?php

class NUsuarios {

    public function registrarUsuario(EUsuarios $entidadUsuario) {
        $Alias = $entidadUsuario->getAlias();
        $Contrasena = $entidadUsuario->getContrasena();
        $Correo = $entidadUsuario->getCorreo();
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $nuevoUsuario = $cnn->prepare("INSERT INTO usuario(Alias, Contrasena, Correo) VALUES (:Alias, :Contrasena, :Correo)");
            $nuevoUsuario->bindParam(':Alias', $Alias, PDO::PARAM_STR);
            $nuevoUsuario->bindParam(':Contrasena', $Contrasena, PDO::PARAM_STR);
            $nuevoUsuario->bindParam(':Correo', $Correo, PDO::PARAM_STR);
            $nuevoUsuario->execute();
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    public function consultaUsuarioExiste(EUsuarios $entidadUsuario) {
        $Alias = $entidadUsuario->getAlias();
        $Correo = $entidadUsuario->getCorreo();
        $mensaje = "";
        $cnn = Conexion::getConexion();
        try {
            $exiteUsuario = "SELECT correo,alias FROM USUARIO WHERE ALIAS= '$Alias' OR CORREO= '$Correo' ";
            $query = $cnn->prepare($exiteUsuario);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    public function login(EUsuarios $entidadUsuario) {
        $Alias = $entidadUsuario->getAlias();
        $Contrasena = $entidadUsuario->getContrasena();
        $mensaje = "";
        $cnn = Conexion::getConexion();
        try {
            $exiteUsuario = "SELECT * FROM USUARIO WHERE ALIAS= '$Alias' AND CONTRASENA= '$Contrasena' ";
            $query = $cnn->prepare($exiteUsuario);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

}
