<?php
    include("../../conection.php");

    if($conexion) {

        $sql = 'SELECT unnest(enum_range(NULL::categorias))';

        $resultado = pg_query($conexion, $sql);

        while($row = pg_fetch_row($resultado)) {
            echo "<option>".$row[0]."</option>";
        }
        

    } else {
        die("La conexión falló");
    }
?>