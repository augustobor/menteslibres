<?php
    include('../../../conection.php');

    session_start();

    if($conexion) {

        $sql = "SELECT nombre_usuario, password 
        FROM admin 
        WHERE nombre_usuario = '$_POST[user]' AND password = '$_POST[password]'";

        $resultado = pg_query($conexion, $sql);

        $row_number = pg_num_rows($resultado);

        if($row_number == 1) {

            $_SESSION['admin'] = 1;
            $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
            $_SESSION['tiempo'] = 100;
            
            header("Location: ../../main/index.php");

        } else {

            $_SESSION['mensaje'] = "Error al iniciar sesión";
            header("Location: ../index.php");
        }

    } else {

        die("La conexión falló");
    
    }
    

?>