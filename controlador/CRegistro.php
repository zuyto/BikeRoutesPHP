<?php

include('modelo/Conexion.php');
include("modelo/negocio/NUsuarios.php");
include("modelo/entidades/EUsuarios.php");




if (isset($_POST['registrarse'])) {

    $negocioUsuario = new NUsuarios();
    $entidadUsuario = new EUsuarios();

    $entidadUsuario->setAlias($_POST['alias']);
    $entidadUsuario->setCorreo($_POST['correo']);

    $consultaExisteUsuario = $negocioUsuario->consultaUsuarioExiste($entidadUsuario);


    if (count($consultaExisteUsuario, 1) > 0) {
        $mensaje = '<div class="alert alert-danger" role="alert">
                        <strong>Usuario ya existe</strong>
                    </div>';
    } else if ($_POST['contrasena'] != $_POST['confirmaContrasena']) {
        $mensaje = '<div class="alert alert-warning" role="alert">
                        <strong>Las contraseñas no coinciden</strong>
                    </div>';
    } else {

        try {
            $entidadUsuario->setAlias($_POST['alias']);
            $entidadUsuario->setContrasena($_POST['contrasena']);
            $entidadUsuario->setCorreo($_POST['correo']);

            $negocioUsuario->registrarUsuario($entidadUsuario);

            $mensaje = '<div class="alert alert-success" role="alert">
                            <strong>Se ha registrado con éxito</strong>
                        </div>';
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            $mensaje = '<div class="alert alert-danger" role="alert">
                            <strong>Se presento un error </br> al crear el Usuario</strong>
                        </div>';
        }
    }
} 
//else 
//{
//    $mensaje = '<div class="alert alert-warning" role="alert">
//                    <strong>Ingrese sus datos</strong>
//                </div>';
//}

