<?php
include 'inc/modelos/modelo-admin-santuarios.php';
include 'inc/sesiones-admin.php';
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
    <title>Actualizar Información del recorrido de la Mariposa</title>
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
        <nav class="navbar bg-warning">
            <div class="fondo-nav fuente-barra container ">
                <ul class="nav nav-justified w-100 flex-column flex-sm-row">
                    <li class="nav-item"><a href="admin.php" class="nav-link">Ventas</a></li>
                    <li class="nav-item"><a href="admin-santuarios.php" class="nav-link">Santuario</a></li>
                    <li class="nav-item"><a href="admin-recintos.php" class="nav-link">Recintos</a></li>
                    <li class="nav-item"><a href="admin-mariposas.php" class="nav-link">Mariposas</a></li>
                    <li class="nav-item"><a href="index.php?cerrar_sesion=true" class="nav-link">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Actualizar Información del recorrido de la Mariposa</h1>
        <div class="mt-5 container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-5">
                    <div class="p-5 bg-light border border-dark">

                        <form action="#" id="formulario" class="mt-5">
                            <div class="form-group">
                                <label for="text">Nombre de la Mariposa:</label>
                                <input type="text" class="form-control" id="nombre" value="Mariposa Monarca">
                            </div>
                            <div class="form-group">
                                <label for="text">Mes del recorrido:</label>
                                <input type="text" class="form-control" id="mes">
                            </div>
                            <div class="form-group">
                                <label for="text">Posición del recorrido:</label>
                                <input type="text" class="form-control" id="posicion">
                            </div>
                            <div class="form-group">
                                <label for="text">Estado de Mariposa:</label>
                                <select name="estado" id="estado">
                                    <option value="0">En viaje</option>
                                    <option value="1">Capullo</option>
                                    <option value="2">Reproducción</option>
                                    <option value="3">Salida</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="text">Santuario al que pertenece:</label>
                                <select name="santuarios" id="santuario">
                                    <?php $registros = obtenerSantuario();

                                    if ($registros->num_rows) {
                                        foreach ($registros as $registros) {
                                            
                                    ?>
                                           <option value="<?php echo $registros['idSantuario']?>"><?php echo $registros['nomSant']?></option> 
                                    
                                    <?php
                                        }
                                    } ?>
                                </select>
                            </div>
                            <input type="submit" class="mt-4 btn btn-default border border-dark" value="Actualizar recorrido" name="" id="actualizarRecorrido">
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <script src="js/jquery.slim.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/mariposa.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>