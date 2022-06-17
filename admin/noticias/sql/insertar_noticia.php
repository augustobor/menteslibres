<?php
    include("../../../conection.php");
    session_start();

    if($conexion) {

    

        $sql = "INSERT INTO noticia (titulo, fecha, noticia) 
            VALUES ('$_POST[titulo]', NOW(), '$_POST[noticia]')";
    
        $resultado = pg_query($conexion, $sql);

        if($resultado) {

            $sentencia = "COMMIT;";
            $_SESSION['mensaje'] = "Noticia agregada correctamente.";

        } else {

            $sentencia = "ROLLBACK;";
            $_SESSION['mensaje'] = "Error al agregar la noticia.";

        }
    
        pg_query($conexion, $sentencia);

    } else {

        die("La conexión falló");
    
    }

    header("Location: ../agregar_noticia.php");
?>