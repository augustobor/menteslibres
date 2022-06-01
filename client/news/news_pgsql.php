<?php
    include("../../conection.php");

    if($conexion) {

        $sql = "SELECT titulo, fecha, noticia FROM noticia";

        $resultado=pg_query($conexion, $sql);
        
        if(pg_num_rows($resultado) > 0) {

            while($row = pg_fetch_row($resultado)) {
                echo "<article>";
                echo "<h2>".$row[0]."</h2>";
                echo "<h3>".$row[1]."</h3>";
                echo "<div class='noticia'>";
                echo "<p>".$row[2]."</p>";
                echo "</div>";
                echo "</article>";
            }

        } else {
            echo "<h2>No tenemos noticias :C</h2>";
        }

    } 

?>