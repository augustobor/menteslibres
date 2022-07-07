<?php
    include('../../../conection.php');

    session_start();

    if($conexion) {

        $sql= "SELECT * FROM admin WHERE nombre_usuario = '$_POST[user]'";

        $resultado = pg_query($conexion, $sql);
        $buscarpass = pg_fetch_array($resultado);
        $row_number = pg_num_rows($resultado);

        if(($row_number == 1) && (password_verify($_POST['password'], $buscarpass['password']))) {

            $_SESSION['admin'] = 1;
            $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
            $_SESSION['tiempo'] = 600;
            
            header("Location: ../../main/index.php");

        } else {

            $_SESSION['mensaje'] = "Error al iniciar sesión";
            header("Location: ../index.php");
        }

    } else {

        die("La conexión falló");
    
    }
    

?>