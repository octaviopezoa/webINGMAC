<?php
    include 'lib/config.php';
    $lista = "select galeria.id, galeria.producto, galeria.ruta, obras.nombre from galeria inner join obras on galeria.id_obras=obras.id";
    
     

        echo "listado exitoso";
        $res=$conexion->query($lista);
        while ($obras = mysqli_fetch_array($res)) {
            
            echo "<tr>";
            echo "<td>{$obras['nombre']}</td>";
            echo "<td>{$obras['producto']}</td>";
            echo "<td><img src="."'{$obras['ruta']}' width='100px'></td>";
            echo "<td>";
                echo "<a href="."'gal_borrar.php?id={$obras['id']}'"."class="."waves-effect waves-light btn-small".">Borrar</a>";                
            echo "</td>";
            echo "</tr>";
        };
   
    $conexion->close();

?>