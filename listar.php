<?php
    include 'lib/config.php';
    $lista = "Select * from control";
    
        echo "listado exitoso";
        $res=$conexion->query($lista);
        while ($usuarios = mysqli_fetch_array($res)) {
            
            echo "<tr>";
            echo "<td>{$usuarios['nombre']}</td>";
            echo "<td>{$usuarios['email']}</td>";
            echo "<td>";
                echo "<a href="."'borrar.php?id={$usuarios['id']}'"."class="."waves-effect waves-light btn-small".">Borrar</a>";
                echo "  ";
                echo "<a href="."'editar.php?id={$usuarios['id']}'"."class="."waves-effect waves-light btn-small".">Editar</a>";
            echo "</td>";
            echo "</tr>";
        };
   
    $conexion->close();

?>