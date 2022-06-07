<?php
    include("../../../conection.php");

    if($conexion) {

        $resultado_id = pg_query($conexion, "
        SELECT id
        FROM autor
        WHERE Nombre = '$_POST[autor]'");

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
            VALUES ('$_POST[titulo]', '$resultado_id[0]', '$_POST[contenido]', '$_POST[categories]')";
    
        $resultado = pg_query($conexion, $sql);

        if($resultado) {

            $sentencia = "COMMIT;";
            $_SESSION['mensaje'] = "Publicación agregada correctamente";

        } else {

            $sentencia = "ROLLBACK;";
            $_SESSION['mensaje'] = "Error al agregar la publicación";

        }
    
        pg_query($conexion, $sentencia);

    } else {

        die("La conexión falló");
    
    }

    header("Location: ../agregar_modificar_obra.php");
?>