<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql =  "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
        VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";



$ejecutar = mysqli_query($conexion,$sql);      

if($ejecutar){  
    echo'
    <script>
    alert("Registrado exitosamente");
    window.location = "../login.php";       
    </script>
    ';
}else{
    echo'
    <script>
    alert("Revisa tu conexión");
    window.location = "../register.php";    
    </script>
    ';
}


?>