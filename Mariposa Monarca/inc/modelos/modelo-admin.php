<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];


include '../conexion.php';

try {
    $stmt = $bd->prepare("SELECT `id_usuario`,`nombre`,`rol`,`pass` FROM usuarios WHERE nombre = ? ");
    if ($stmt) {
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        //Loguear usuario

        $stmt->bind_result($id_usuario, $nombre_usuario, $rol_usuario, $password_usaurio);
        $stmt->fetch();
        if ($nombre_usuario) {
            if ($password === $password_usaurio) {
                session_start();
                $_SESSION['nombre'] = $nombre_usuario;
                $_SESSION['id'] = $id_usuario;
                $_SESSION['rol'] = $rol_usuario;
                $_SESSION['login'] = true;
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'id' => $id_usuario,
                    'nombre' => $nombre_usuario,
                    'rol' => $rol_usuario,
                );
            } else if ($nombre_usuario && $password_usaurio != $password) {
                $respuesta = array(
                    'respuesta' => 'Password incorrecta'
                );
            }
        } else {
            $respuesta = array(
                'respuesta' => 'Usuario no existe'
            );
        }
        $stmt->close();
        $bd->close();
    }
} catch (Exception $e) {
    $respuesta = array(
        'pass' => $e->getMessage()
    );
}
echo json_encode($respuesta);
