<?php

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


if ($nombre !='' && $descripcion !='') {
   
    include 'lib/config.php';
    
    $inserta="insert into obras (nombre, descripcion) values ('$nombre','$descripcion')";
    
    
    if ($conexion->query($inserta)=== TRUE) {
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