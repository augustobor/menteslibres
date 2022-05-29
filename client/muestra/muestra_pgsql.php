<?php
    include("../../conection.php");

    $conexion = pg_connect("host=localhost dbname=pabellon_literario_db user=postgres password=Roma2018");
    
    if($conexion) {

        $sql = 'SELECT contenido FROM public.contenido WHERE titulo = '.$_SESSION['titulo'].';';
        $resultado = pg_query($conexion, $sql);
        $row = pg_fetch_row($resultado);
        echo "<p>".$row[0]."</p>";
    } else {
        die("La conexión falló");
    }
?>