<?php
require '../modelo/Conexion.php';
require '../modelo/entidades/EUsuarios.php';
require '../modelo/negocio/NUsuarios.php';




if (isset($_POST['registrarse'])) {

    $negocioUsuario = new NUsuarios();
    $entidadUsuario = new EUsuarios();


    
    try {
        $entidadUsuario->setAlias($_POST['alias']);
        $entidadUsuario->setContrasena($_POST['contrasena']);
        $entidadUsuario->setCorreo($_POST['correo']);

         $negocioUsuario->registrarUsuario($entidadUsuario);
        
         $crearUsuario = 1;
        header("Location: ../registro.php?registroOK=" . $crearUsuario);
        
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
        $mensaje = "Error en la creacion intente de nuevo";
        header("Location: ../registro.phpregistroNOK=false");
    }
}

