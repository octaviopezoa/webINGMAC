<?php
$id= $_POST['id'];
$email = $_POST['email'];
$pass = $_POST['password'];
$nombre = $_POST['nombre'];

if ($nombre !='' && $email !='' && $pass !='') {
    $password= base64_encode($pass);
    include 'lib/config.php';
    
    $actualiza="update control set email='$email', clave='$password', nombre='$nombre' where id='$id'";
    
    
    if ($conexion->query($actualiza)=== TRUE) {
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