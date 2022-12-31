<?php
    include("../../../conection.php");
    session_start();

    if($conexion) {

       

        $sql = "DELETE FROM contenido WHERE id = '$_REQUEST[titulo]'";
    
        $resultado = pg_query($conexion, $sql);

        if($resultado) {

            $sentencia = "COMMIT;";
            $_SESSION['mensaje'] = "Publicación eliminada correctamente";

        } else {

            $sentencia = "ROLLBACK;";
            $_SESSION['mensaje'] = "Error al eliminar la publicación";

        }
    
        pg_query($conexion, $sentencia);

    } else {

        die("La conexión falló");
    
    }

    header("Location: ../eliminar_obra.php");
?>