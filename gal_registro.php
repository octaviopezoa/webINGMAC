<?php

$idobra = $_POST['idobra'];
$descripcion = $_POST['descripcion'];

// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];

//Si existe imagen y tiene un tamaño correcto
if ($nombre_img == !NULL)
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/webINGMAC/images/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 

$ruta = "./images/".$nombre_img;

if ($descripcion !='') {
   
    include 'lib/config.php';

    $inserta="insert into galeria (id_obras, ruta, producto) values ('$idobra', '$ruta','$descripcion')";
    
    echo "$conexion->query($inserta";
    if ($conexion->query($inserta)=== TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Falló la inserción";
    }
    $conexion->close();
    header('location: galeria.php');
        
} else {
    echo "campos en blanco";
}


?>