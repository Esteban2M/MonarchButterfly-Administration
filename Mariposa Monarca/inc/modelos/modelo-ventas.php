<?php 
    $monto = $_POST['monto'];
    $descripcion = $_POST['descripcion'];
    $id_usuario = $_POST['id_usuario'];

    

 include '../conexion.php';
try{

    $smtm = $bd->prepare("INSERT INTO ventas (descripcion, monto, id_usuario) VALUES (?,?,?)");
    $smtm->bind_param("sii", $descripcion, $monto, $id_usuario);
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