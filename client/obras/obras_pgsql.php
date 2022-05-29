<?php
    include("../../conection.php");
    error_reporting(0);

    $conexion = pg_connect("host=localhost dbname=pabellon_literario_db user=postgres password=Roma2018");
    
    if($conexion) {

        $sql = 'SELECT nombre, titulo FROM public."contenido" INNER JOIN public."autor" ON public."contenido".autor_id = public."autor".id ORDER BY nombre;';
        $resultado = pg_query($conexion, $sql);

        $filas = pg_num_rows($resultado);
        $row = pg_fetch_row($resultado);

        while($filas > 0) {
            
            echo "<li class='autor'>";
            echo "<div>";
            echo "<h3>".$row[0]."</h3>";
            echo "<img class='menu-arrow' src=../../assets/arrow.svg alt=''/>";
            echo "</div>";
            echo "<ul>";

            $autor_anterior = array(
                "nombre" => $row[0],
                "titulo" => $row[1]
            );

            while($autor_anterior["nombre"] == $row[0]) {
                echo "<li class='obra'>";
                echo "<button class='btn-obra'>".$row[1]."</button>";
                echo "</li>";
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