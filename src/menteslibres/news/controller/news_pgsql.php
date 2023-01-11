<?php
    require("../conection.php");
    error_reporting(0);
    if($conexion) {

        $sql = "SELECT titulo, fecha 
        FROM noticia
        ORDER BY fecha DESC";

        $resultado=pg_query($conexion, $sql);
        
        if(pg_num_rows($resultado) > 0) {

            while($row = pg_fetch_row($resultado)) {
                echo "<article class='noticia'>";
                echo "<h2>".$row[0]."</h2>";
                echo "<h3>".$row[1]."</h3>";
                echo "</article>";
            }

        } else {
            echo "<h2>No tenemos noticias :C</h2>";
        }

    } 

?>