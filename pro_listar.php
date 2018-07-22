<?php
    include 'lib/config.php';
    $lista = "Select * from obras";
    
        echo "listado exitoso";
        $res=$conexion->query($lista);
        while ($obras = mysqli_fetch_array($res)) {
            
            echo "<tr>";
            echo "<td>{$obras['nombre']}</td>";
            echo "<td>{$obras['descripcion']}</td>";
            echo "<td>";
                echo "<a href="."'pro_borrar.php?id={$obras['id']}'"."class="."waves-effect waves-light btn-small".">Borrar</a>";
                echo "  ";
                echo "<a href="."'pro_editar.php?id={$obras['id']}'"."class="."waves-effect waves-light btn-small".">Editar</a>";
            echo "</td>";
            echo "</tr>";
        };
   
    $conexion->close();

?>