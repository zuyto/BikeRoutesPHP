

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Bemat Admin - Register</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Bootstrap Core CSS - Include with every page -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Bemat Admin CSS - Include with every page -->
        <link href="css/themes/theme-default-danger/bemat-admin.css" rel="stylesheet" id="theme-switcher">
    </head>

    <body id="page-authentication" class="container-fluid " >
        <?php echo $mensaje = ""; ?>
        <div id="authentication-box" class="authentication-style1 img-responsive ">
            <div class="authentication-box-wrapper">
                <div class="panel panel-default">
                    <div class="panel-body no-padding img-responsive">

                        <div class="authentication-body">

                            <form class="form" role="form" action="controlador/CUsuarios.php" method="POST" >
                                <div class="form-group floating-label">
                                    <input type="text" class="form-control" id="regular2" name="alias">
                                    <label for="regular2">Alias</label>
                                </div>
                                <div class="form-group floating-label">
                                    <input type="password" class="form-control" id="password" name="contrasena">
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="form-group floating-label">
                                    <input type="password" class="form-control" id="password2" name="confirmaContrasena">
                                    <label for="password2">Repite tu contraseña</label>
                                </div>
                                <div class="form-group floating-label">
                                    <input type="email" class="form-control" id="email" name="correo">
                                    <label for="email">Dirección de correo electrónico</label>
                                </div>
                                <div class="">

                                    <label>
                                        <input class="checkbox checkbox-primary" type="checkbox" name="check" />
                                        <span>Acepto los  <a href="#">terminos y condiciones</a></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input id='registrarse' type="submit" class="btn btn-info btn-raised btn-block" value="Regístrate" name="registrarse"> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    ¿Ya tienes una cuenta? <a href="login.php" class="text-default-bright">Inicia sesión</a>
                </div>
            </div>



        </div>
        <!-- Core Scripts - Include with every page -->
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/jquery-ui.custom.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>

        <!-- Page-Level Plugin Scripts - Dashboard -->
        <script src="vendor/google-code-prettify/prettify.js" type="text/javascript"></script>
        <script src="vendor/perfectscrollbar/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="vendor/DataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="vendor/DataTables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/DataTables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/fullscreen/jquery.fullscreen-min.js" type="text/javascript"></script>
        <script src="vendor/fullcalendar/moment.min.js" type="text/javascript"></script>
        <script src="vendor/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="vendor/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
        <script src="vendor/chartist/chartist.min.js" type="text/javascript"></script>
        <script src="vendor/summernote/summernote.min.js" type="text/javascript"></script>
        <script src="vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="vendor/wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

        <!-- Cerocreativo Plugins -->
        <script src="vendor/materialRipple/jquery.materialRipple.js" type="text/javascript"></script>
        <script src="vendor/snackbar/jquery.snackbar.js" type="text/javascript"></script>
        <script src="vendor/toasts/jquery.toasts.js" type="text/javascript"></script>
        <script src="vendor/speedDial/jquery.speedDial.js" type="text/javascript"></script>
        <script src="vendor/circularProgress/jquery.circularProgress.js" type="text/javascript"></script>
        <script src="vendor/linearProgress/jquery.linearProgress.js" type="text/javascript"></script>
        <script src="vendor/subheader/jquery.subheader.js" type="text/javascript"></script>
        <script src="vendor/simplePieChart/jquery.simplePieChart.js" type="text/javascript"></script>

        <!-- Bemat Admin Scripts - Included with every page -->		
        <script src="js/bemat-admin-common.min.js"></script>
        <script src="js/bemat-admin-demo.min.js"></script> 

    <script type="text/javascript">
      <?php
      
      if($_GET['registroOK'] == 1){ ?>
          
          <script> </script>
          
      <?php}
      
      ?>
      
      
			
		
    </script>

    </body>
</html>
