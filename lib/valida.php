<?php
session_start();

include 'config.php';

if ($_SESSION['email']=='' && $_SESSION['pass']=='') {
    # code...
    header('location: login.html');
} else {
    
    $valida="select * from control where email='".$_SESSION['email']."' and clave='".$_SESSION['pass']."'";

    $result=$conexion->query($valida);
    $row=$result->num_rows;

    if ($row<=0) {
        header('location: login.html');
    }
}
$conexion->close();

?>