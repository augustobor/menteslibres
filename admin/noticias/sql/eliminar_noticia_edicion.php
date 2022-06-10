<?php
    include("../../../conection.php");

    if($conexion) {

        $sql = "DELETE FROM noticia WHERE id = '$_REQUEST[titulo]'";
    
        $resultado = pg_query($conexion, $sql);

        if($resultado) {

            $sentencia = "COMMIT;";
            $_SESSION['mensaje'] = "Noticia eliminada correctamente";

        } else {

            $sentencia = "ROLLBACK;";
            $_SESSION['mensaje'] = "Error al eliminar la noticia";

        }
    
        pg_query($conexion, $sentencia);

    } else {

        die("La conexión falló");
    
    }

    header("Location: ../eliminar_noticia.php");
?>