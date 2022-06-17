<?php
$bd = new mysqli('db4free.net', 'root_mariposas', 'root_mariposas', 'bd_mariposas');

if($bd->connect_error){
    echo $bd->connect_error;
}

$bd->set_charset('utf8');