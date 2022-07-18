<?php
    include("../../../conection.php");
    session_start();

    if($conexion) {

        $resultado_titulo = pg_query($conexion , "
        SELECT titulo 
        FROM contenido 
        WHERE titulo = '$_POST[titulo]'");

        if(pg_num_rows($resultado_titulo) == 0) {


            $resultado_id = pg_query($conexion, "
            SELECT id
            FROM autor
            WHERE Nombre='$_POST[autor]'");

            if(pg_num_rows($resultado_id) == 0) {

                $sql = "INSERT INTO autor (Nombre) VALUES ('$_POST[autor]')";
                $resultado = pg_query($conexion, $sql);
                $resultado_id = pg_query($conexion, "
                SELECT id
                FROM autor
                WHERE Nombre = '$_POST[autor]'");
                
            } 

            $resultado_id = pg_fetch_array($resultado_id);

            $sql = "INSERT INTO contenido (titulo, autor_id, contenido, categoria) 
                VALUES (LTRIM(RTRIM('$_POST[titulo]')), '$resultado_id[0]', $$$_POST[contenido]$$, '$_POST[categories]')";
        
            $resultado = pg_query($conexion, $sql);

            if($resultado) {

                $sentencia = "COMMIT;";
                $_SESSION['mensaje'] = "Publicación agregada correctamente. Complete los campos para agregar otra obra.";

            } else {

                $sentencia = "ROLLBACK;";
                $_SESSION['mensaje'] = "Error al agregar la publicación";

            }
        
            pg_query($conexion, $sentencia);
        
        } else {

            $_SESSION['mensaje'] = "Ya existe una obra con ese titulo";
        
        }

    } else {

        die("La conexión falló");
    
    }

    header("Location: ../agregar_obra.php");
?>