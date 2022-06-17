<?php
    session_start();
    if(isset($_GET['cerrar_sesion'])){
        $_SESSION = array();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Serif+Pro:ital,wght@0,200;0,700;1,200;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
    <?php 
        include 'inc/conexion.php';    
    ?>
    <!-- Add Your HTML here -->
    <header class="encabezado-sitio container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <img src="img/Logo.png" style="width:150px; height:150px;" class="img-fluid mx-auto d-block" alt="">
            </div>
        </div>
    </header>
    <div class="navegacion">
        <nav class="navbar bg-warning justify-content-center">
            <div class="fondo-nav fuente-barra">
                <h3 class="text-center text-uppercase">
                    ¡Bienvenido al Sistema de Ventas y Administración!
                </h3>
            </div>
        </nav>
    </div>
    <div class="mt-5 container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-5">
                <div class="p-5 bg-light border border-dark">
                    <p class="h5 text-center text-uppercase">
                        Inicio de Sesión
                    </p>

                    <form action="#" id="formulario" class="mt-5">
                        <div class="form-group">
                            <label for="text">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" placeholder="Introduce tu Usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" placeholder="Introduce tu Contraseña">
                        </div>
                        <input type="submit" class="mt-4 btn btn-default border border-dark" value="Iniciar Sesión" name="" id="submit">
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/formulario.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>