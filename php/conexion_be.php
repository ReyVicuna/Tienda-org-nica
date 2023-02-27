<?php

$conexion = mysqli_connect("localhost","root","","login_register_db");


if($conexion){
    echo 'Conectado exitosamente';
}else{
    echo 'error de conexion';
}




?>