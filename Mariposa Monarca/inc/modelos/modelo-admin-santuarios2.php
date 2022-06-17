<?php

$nombre = $_POST['nombre'];
$fechaInicio = $_POST['fechInicio'];
$fechafin = $_POST['fechfin'];
$idSantuario = $_POST['idSantuario'];
include '../conexion.php';

try{

    $smtm = $bd->prepare("UPDATE  santuario SET nomSant = ?, fecInicio = ?, fecfin = ? WHERE idSantuario = ?;");
    $smtm->bind_param("sssi", $nombre, $fechaInicio, $fechafin,$idSantuario);
    $smtm->execute();

    $respuesta = array(
        'respuesta'=> 'correcto'
    );  

    $smtm->close();
    $bd->close();
}catch (Exception $e) {
    $respuesta = array(
        'pass' => $e->getMessage()
    );
}


echo json_encode($respuesta);