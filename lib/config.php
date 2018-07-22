<?php

$servidor='localhost';
$user='usuario';
$pass='clave';
$db='manager';

$conexion=new msqli($servidor,$user,$pass,$db);

if($conexion->connect_errno) {
    echo "Error al conectarse";
} else {
    echo"conexion exitosa";
}

?>