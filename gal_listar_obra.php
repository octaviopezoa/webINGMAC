<?php
    include 'lib/config.php';
    $lista = "Select * from obras";      
        $res=$conexion->query($lista);

        echo "<select name='idobra' id='selectedTest'>";
        while ($obras = mysqli_fetch_array($res)) {        

            echo "<option value=";
            echo "'{$obras['id']}'";
            echo ">{$obras['nombre']}";
            echo "</option>";
            
        };
        echo "</select>";
    $conexion->close();

?>


