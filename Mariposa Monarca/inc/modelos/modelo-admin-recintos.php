<?php

function obtenerRecinto(){
    include 'inc/conexion.php';
    try{
        
        return $bd-> query("SELECT * FROM recinto");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerPertenencia($id){
    include 'inc/conexion.php';
    try{

        return $bd-> query("SELECT nomSant FROM santuario WHERE idSantuario = $id");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerInfoRecinto($id){
    include 'inc/conexion.php';
    try{

        return $bd-> query("SELECT * FROM recinto WHERE id_recinto = $id");


    }catch(Exception $e){
        echo "Error" . $e->getMessage() . "<br>";
        return false;
    }
}

