<?php
$id= $_POST['id'];

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


if ($nombre !='' && $descripcion !='') {

    include 'lib/config.php';
    
    $actualiza="update obras set nombre='$nombre', descripcion='$descripcion' where id='$id'";
    
    
    if ($conexion->query($actualiza)=== TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Falló la inserción";
    }
    $conexion->close();
    header('location: proyectos.php');
        
} else {
    echo "campos en blanco";
}


?>