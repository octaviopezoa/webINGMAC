<?php

$id = $_REQUEST['id'];


if ($id !='') {
    
    include 'lib/config.php';
    
    $borrar="delete from obras where id='$id'";
    
    
    if ($conexion->query($borrar)=== TRUE) {
        echo "Eliminación exitosa";
    } else {
        echo "Falló la eliminación";
    }
    $conexion->close();
    header('location: proyectos.php');
        
} 

?>