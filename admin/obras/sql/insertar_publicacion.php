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

                $resul_new_id = pg_query($conexion, "SELECT MAX(id) FROM autor;");
                $resul_new_id = pg_fetch_array($resul_new_id);
                $resul_new_id = $resul_new_id[0] + 1;

                $sql = "INSERT INTO autor (id, Nombre) VALUES ('$resul_new_id','$_POST[autor]')";
                $resultado = pg_query($conexion, $sql);
                $resultado_id = pg_query($conexion, "
                SELECT id
                FROM autor
                WHERE Nombre = '$_POST[autor]'");
                
            } 

            $resultado_id = pg_fetch_array($resultado_id);

            $resul_new_id = pg_query($conexion, "SELECT MAX(id) FROM contenido;");
            $resul_new_id = pg_fetch_array($resul_new_id);
            $resul_new_id = $resul_new_id[0] + 1;

            $sql = "INSERT INTO contenido (id, titulo, autor_id, contenido, categoria) 
                VALUES ('$resul_new_id',LTRIM(RTRIM('$_POST[titulo]')), '$resultado_id[0]', $$$_POST[contenido]$$, '$_POST[categories]')";
        
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

    echo "<script> window.location.href='../agregar_obra.php'</script>";
?>