<?php

$email = $_POST['email'];
$pass = $_POST['password'];
$nombre = $_POST['nombre'];

if ($nombre !='' && $email !='' && $pass !='') {
    $password= base64_encode($pass);
    include 'lib/config.php';
    
    $inserta="insert into control (email, clave, nombre) values ('$email','$password', '$nombre')";
    
    
    if ($conexion->query($inserta)=== TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Falló la inserción";
    }
    $conexion->close();
    header('location: usuarios.php');
        
} else {
    echo "campos en blanco";
}


?>