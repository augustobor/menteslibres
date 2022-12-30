<?php

    require("../conection.php");

    
    if($conexion) {

      
        $sql = "SELECT titulo, contenido
        FROM contenido 
        WHERE titulo = '$_SESSION[titulo]';";

        $resultado=pg_query($conexion, $sql);
        
        if($resultado) {
            $record = pg_fetch_array($resultado);
            echo "<h1>$record[titulo]</h1>";
            echo "<section>$record[contenido]</section>";
        } 

    } 
?>