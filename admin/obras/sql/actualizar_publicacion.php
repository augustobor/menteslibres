<?php
    include("../../../conection.php");
    session_start();

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

        

        $sql = "UPDATE contenido 
        SET titulo = '$_POST[titulo]', 
        categoria = '$_POST[categories]', 
        autor_id = '$resultado_id[0]',
        contenido = '$_POST[contenido]'
        WHERE id = '$_SESSION[id_obra]'";

        $resultado = pg_query($conexion, $sql);

        if($resultado) {

            $sentencia = "COMMIT;";
            $_SESSION['mensaje'] = "Obra modificada correctamente";
            header("Location: ../modificar_obra.php");

        } else {

            $sentencia = "ROLLBACK;";
            $_SESSION['mensaje'] = "Error al modificar la obra";

        }
    
        pg_query($conexion, $sentencia);

    } else {

        die("La conexión falló");
    
    }

?>