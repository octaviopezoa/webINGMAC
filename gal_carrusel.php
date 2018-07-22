<?php
    $codigo = $_REQUEST['id_obras'];
    include 'lib/config.php';
    $carruselx = "select * from obras where id=$codigo";
    $r = $conexion->query($carruselx);
        while ($obra = mysqli_fetch_array($r)) {
            # code..
            $carrusel= "select * from galeria where id_obras=$codigo";

            echo "<div class='slider' width='75%'>";
            echo "    <ul class='slides'>";

            $resp=$conexion->query($carrusel);
            while ($galeria = mysqli_fetch_array($resp)) {
                
                //<!-- SLIDER DE IMAGENES -->

                echo "    <li>";
                echo "        <img src='".$galeria['ruta']."'>";
                echo "        <div class='caption right-align'>";
                echo "        <h3 class='black-text'>{$obra['nombre']}</h3>";
                echo "        <h5 class='black-text text-black-3'>{$galeria['producto']}</h5>";
                echo "        </div>";
                echo "    </li>";

            };

            echo "    </ul>";
            echo "    </div>";
    
            echo "<div class='row'>";
            echo "<!-- Descripcion obra -->";
            echo "    <div class='col s12 m6 l5'>";
            echo "      <div class='card card deep-orange darken-2'>";
            echo "            <div class='card-content white-text'>";     
            echo "                <span class='card-title'><b>{$obra['nombre']}</b></span>";
            echo "                <p>{$obra['descripcion']}</p>";
            echo "           </div>";
            echo "      </div>";
            echo "    </div>";
        };

    $conexion->close();

?>