<?php

function obtenerRegistros(){

    include 'inc/conexion.php';
    try{
        
        return $bd-> query("SELECT * FROM ventas");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerNombre($id){
    include 'inc/conexion.php';
    try{

        return $bd-> query("SELECT nombre, apellidos FROM usuarios WHERE id_usuario = $id");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }

}
