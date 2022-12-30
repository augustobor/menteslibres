<?php
    include("../../conection.php");

    if($conexion) {

        $sql = "SELECT titulo, categoria, nombre, contenido, contenido.id
        FROM contenido INNER JOIN autor ON autor_id = autor.id
        WHERE contenido.id = '$_SESSION[id_obra]'";

        $resultado = pg_query($conexion, $sql);

        if($resultado) {
            $row = pg_fetch_row($resultado);
            echo "<input name='titulo' type='text' placeholder='Nombre de la obra' value='$row[0]' required/>";
            echo "<select name='categories' placeholder='Categoria' required>";

            $resultado_options = pg_query($conexion, "SELECT unnest(enum_range(NULL::categorias))");

            if($resultado_options) {

                while($row_options = pg_fetch_row($resultado_options)) {

                    if($row[1] == $row_options[0]) {
                        echo "<option selected>$row_options[0]</option>";
                    } else {
                        echo "<option>$row_options[0]</option>";
                    }

                }
            }

            echo "</select>";
            echo "<input name='autor' type='text' placeholder='Autor' value='$row[2]' required/>";
            echo "<textarea name='contenido' type='text' id='RichText' name='noticia' required>$row[3]</textarea>";
        
        }
        

    } else {
        die("La conexión falló");
    }
?>