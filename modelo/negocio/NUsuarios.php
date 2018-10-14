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
            $nuevoUsuario->bindParam(':Alias',$Alias, PDO::PARAM_STR );
            $nuevoUsuario->bindParam(':Contrasena', $Contrasena, PDO::PARAM_STR);
            $nuevoUsuario->bindParam(':Correo', $Correo, PDO::PARAM_STR);
            $nuevoUsuario->execute();

            $mensaje = "registrado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
        
    }

    public function consultaUsuarioExiste() {
        
        
    }

}
