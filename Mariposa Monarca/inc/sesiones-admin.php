<?php 
function usuario_autenticado(){
    if(!revisar_usuario()){
        header('Location:index.php');
        exit();
    }

}

function revisar_usuario(){
    if($_SESSION['rol'] === 1){
        return isset($_SESSION['nombre']);
    }
    
}

session_start();
usuario_autenticado();