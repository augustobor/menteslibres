<?php
    include("../../conection.php");

    if($conexion) {

        $sql = 'SELECT id, titulo, fecha
        FROM noticia';

        $resultado = pg_query($conexion, $sql);

        while($row = pg_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "</tr>";
        }
        

    } else {
        die("La conexión falló");
    }
?>