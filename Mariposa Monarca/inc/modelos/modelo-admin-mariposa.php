<?php

$nombre_mariposa = $_POST['nombre_mariposa'];
$mes_recorrido = $_POST['mes_recorrido'];
$pos_recorrido = $_POST['pos_recorrido'];
$est_mariposa = $_POST['est_mariposa'];
$idSantuario = $_POST['idSantuario'];
include '../conexion.php';

try{

    $smtm = $bd->prepare("INSERT INTO `mariposas`(`nom_mariposa`, `mes_recorrido`, `pos_recorrido`, `est_mariposa`, `idSantuario`) VALUES (?,?,?,?,?)");
    $smtm->bind_param("sssii", $nombre_mariposa, $mes_recorrido, $pos_recorrido,$est_mariposa,$idSantuario);
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