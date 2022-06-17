<?php

$nombre_recinto = $_POST['nombre_recinto'];
$horario_recinto = $_POST['horario_recinto'];
$id_recinto = $_POST['id_recinto'];
$status_recinto = $_POST['status_recinto'];
$descripcion = $_POST['descripcion'];
include '../conexion.php';

try{

    $smtm = $bd->prepare("UPDATE  recinto SET nombre_recinto = ?, status_recinto = ?, horario_recinto = ?, descripcion = ? WHERE id_recinto = ?;");
    $smtm->bind_param("sissi", $nombre_recinto, $status_recinto, $horario_recinto,$descripcion,$id_recinto);
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