<?php
    include("../../conection.php");

    if($conexion) {

        $sql = 'SELECT id, titulo, fecha
        FROM noticia';

        $resultado = pg_query($conexion, $sql);

        while($record = pg_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>$record[id]</td>";
            echo "<td>$record[titulo]</td>";
            echo "<td>$record[fecha]</td>";
            echo "</tr>";
        }
        
    } else {
        die("La conexión falló");
    }
?>