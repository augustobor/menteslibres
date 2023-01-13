<?php
    require("./conection.php");
    
    if($conexion) {

        $sql = "SELECT titulo, noticia 
        FROM noticia
        WHERE titulo = '$_SESSION[titulo]';";

        $resultado = pg_query($conexion, $sql);
        
        if($resultado) {
            $row = pg_fetch_row($resultado);
            echo "<h1>$row[0]</h1>";
            echo "<section onselectstart= 'return false'>$row[1]</section>";
        } else {
            echo "No se encontró el contenido";
        }

    } 
    
?>