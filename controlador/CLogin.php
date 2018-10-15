<?php

include('modelo/Conexion.php');
include("modelo/negocio/NUsuarios.php");
include("modelo/entidades/EUsuarios.php");


if (isset($_POST['login'])) {

    $negocioUsuario = new NUsuarios();
    $entidadUsuario = new EUsuarios();

    $entidadUsuario->setAlias($_POST['usuario']);
    $entidadUsuario->setContrasena($_POST['contrasena']);

    $consultaExisteUsuario = $negocioUsuario->login($entidadUsuario);

    if (count($consultaExisteUsuario, 1) > 0) {
        $_SESSION['usuario'] = $consultaExisteUsuario;
        $login = '<div class="alert alert-success" role="alert">
                        <strong>Ingreso exitoso</strong>
                    </div>';

        header("Location: index.php#pages/dashboard.html?mensaje=" . $mensaje2);
    } else if (empty($_POST['usuario']) && empty($_POST['contrasena'])) {

        $login = '<div class="alert alert-danger" role="alert">
                        <strong>Ingrese sus datos</strong>
                    </div>';
    } else {
        $login = '<div class="alert alert-danger" role="alert">
                        <strong>¿Aun no tienes cuenta? ¡Registrate! </strong>&nbsp; Usuario no exite
                    </div>';
    }
}

