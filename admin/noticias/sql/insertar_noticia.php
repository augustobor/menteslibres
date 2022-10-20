<?php
    include("../../../conection.php");
    session_start();

    if($conexion) {

        $sql = "SELECT * FROM noticia WHERE titulo = '$_POST[titulo]'";

        $resultado = pg_query($conexion, $sql);

        if(pg_num_rows($resultado) == 0) {

            $noticia = "$$$_POST[noticia]$$";
    
            $resul_new_id = pg_query($conexion, "SELECT MAX(id) FROM noticia;");
            $resul_new_id = pg_fetch_array($resul_new_id);
            $resul_new_id = $resul_new_id[0] + 1;

            $sql = "INSERT INTO noticia (id, titulo, fecha, noticia) 
                VALUES ('$resul_new_id','$_POST[titulo]', NOW(), $noticia)";
        
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
            $_SESSION['mensaje'] = "Ya existe una noticia con ese titulo";
        }

    } else {

        die("La conexión falló");
    
    }

    header("Location: ../agregar_noticia.php");
?>