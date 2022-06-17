<?php
include 'inc/sesiones-ventas.php';
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
    <title>Ventas</title>
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
        <nav class="navbar bg-warning justify-content-left">
            <div class="fondo-nav fuente-barra container ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php?cerrar_sesion=true" class="nav-link">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Registrar Ventas</h1>
    </div>
    <div class="container mt-7">
        <table id="tabla " class="table table-bordered">
            <thead class="thead-inverse">
                <tr class="table-warning">
                    <th>Cantidad de boletos</th>
                    <th>Aplicar Descuento</th>
                </tr>
            </thead>
            <tr>
                <th>
                    <input type="number" min=1 max=20 id="boletos">
                </th>
                <th>
                    <select name="select" id="descuento">
                        <option value="Ninguno" selected>Ninguno</option>
                        <option value="Estudiante">Descuento Estudiante</option>
                        <option value="Docente">Descuento Docente</option>
                    </select>
                </th>
            </tr>

        </table>
        <div class="derecha">
            <input type="submit" class="mt-4 btn btn-warning border border-dark" value="Registrar Venta" name="" id="submit">
            <input type="hidden" id ="id_usuario" name="id_usuario" value="<?php echo $_SESSION['id'] ?>"> 
        </div>
    </div>

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/ventas.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>