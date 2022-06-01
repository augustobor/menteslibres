<?php
    include("../../conection.php");

    
    if($conexion) {

        $sql = "SELECT titulo, contenido FROM contenido WHERE titulo = '$_SESSION[titulo]';";

        $resultado=pg_query($conexion, $sql);
        
        if($resultado) {
            $row = pg_fetch_row($resultado);
            echo "<h1>$row[0]</h1>";
            echo "<p>$row[1]</p>";
        } else {
            echo "No se encontró el contenido";
        }

    } else {

    }
?>