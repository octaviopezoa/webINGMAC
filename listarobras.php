<?php
    include 'lib/config.php';
    $lista = "SELECT * from obras";

        $res=$conexion->query($lista);
        
        while ($obras = mysqli_fetch_array($res)) {
            
            $icono = "select distinct id_obras,ruta, producto from galeria where id_obras=".$obras['id']." limit 1";
            $res2=$conexion->query($icono);
            while ($iconos = mysqli_fetch_array($res2)) {

                echo "<div class='col s12 m6 l3'>";
                echo "    <div class='card'>";
                echo "        <div class='card-image'>";
                echo "            <a href='plantilla.php?id_obras=".$obras['id']."'>";
                echo "            <img id='imagen' src='".$iconos['ruta']."'>";
                echo "            <span class='card-title'><b>".$obras['nombre']."</b></span>";             
                echo "            </a>";
                echo "        </div>";
                echo "    </div>";
                echo "</div>";
            };
        };
      
    $conexion->close();

?>