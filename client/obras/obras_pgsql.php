<?php
    include("../../conection.php");
    error_reporting(0);

    $conexion = pg_connect("host=localhost dbname=pabellon_literario_db user=postgres password=Roma2018");
    
    if($conexion) {

        $sql = 'SELECT nombre, titulo FROM "Contenido" INNER JOIN "Autor" ON "Contenido".id_autor = "Autor".id ORDER BY nombre;';
        $resultado = pg_query($conexion, $sql);

        $filas = pg_num_rows($resultado);
        $row = pg_fetch_row($resultado);

        while($filas > 0) {
            
            echo "<li class='autor'>";
            echo "<h2>".$row[0]."</h2>";

            echo "<ul>";

            $autor_anterior = array(
                "nombre" => $row[0],
                "titulo" => $row[1]
            );

            while($autor_anterior["nombre"] == $row[0]) {
                echo "<li class='obra'>".$row[1]."</li>";
                $row = pg_fetch_row($resultado);
                $filas--;
            }

            echo "</ul>";
            echo "</li>";
        }

    } else {
        die("La conexión falló");
    }
?>