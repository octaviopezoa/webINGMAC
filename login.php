<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];

if ($email !='' && $pass !='') {
    $password=base64_encode($pass);
    include 'lib/config.php';
        $consulta="select * from control where email='$email' and clave='$password'";
        $resultado=$conexion->query($consulta);
        $row=$resultado->num_rows;

        if ($row==1) {
            $_SESSION['email']=$_POST['email'];
            $_SESSION['pass']=base64_encode($_POST['password']);
            header('location: proyectos.php');
            
        } else {
            header('location: login.html');            
        }
        

} else {
    header('location:login.html');
}



?>