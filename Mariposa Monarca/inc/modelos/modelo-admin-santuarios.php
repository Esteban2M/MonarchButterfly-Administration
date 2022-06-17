<?php

function obtenerSantuario(){
    include 'inc/conexion.php';
    try{
        
        return $bd-> query("SELECT * FROM santuario");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerInfoSantuario($id){
    include 'inc/conexion.php';
    try{

        return $bd-> query("SELECT * FROM santuario WHERE idSantuario = $id");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }
}

