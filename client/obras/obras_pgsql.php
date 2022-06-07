<?php
    include("../../conection.php");
    error_reporting(0);
    
    if($conexion) {

        $sql = 'SELECT nombre, titulo, categoria
        FROM contenido  
            INNER JOIN autor ON contenido.autor_id = autor.id 
        ORDER BY nombre, categoria;';

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
                "titulo" => $row[1],
                "categoria" => $row[2]
            );

            while($autor_anterior["nombre"] == $row[0]) {

                echo "<li class='categoria'>";
                echo "<div>";
                echo "<h4>".$row[2]."</h4>";
                echo "<img class='menu-arrow' src=../../assets/arrow.svg alt=''/>";
                echo "</div>";
                echo "<ul>";

                
                $autor_anterior = array(
                    "nombre" => $row[0],
                    "titulo" => $row[1],
                    "categoria" => $row[2]
                );

                //Corte de control :D
                while($autor_anterior["categoria"] == $row[2] && $autor_anterior["nombre"] == $row[0]) {
                    echo "<li class='obra'>";
                    echo "<button class='btn-obra'>".$row[1]."</button>";
                    echo "</li>";
                    $row = pg_fetch_row($resultado);

                    $filas--;
                }

                echo "</ul>";
                echo "</li>";

            }
            
            echo "</ul>";
            echo "</li>";
        }

    } else {
        die("La conexión falló");
    }
?>