<?php
    session_start();
    error_reporting(0);
    if(!isset($_SESSION['admin'])) {
        header("Location: ../login/index.php");
    }else{
        $_SESSION["ahora"] = date("Y-n-j H:i:s");
        $_SESSION["tiempo_transcurrido"] = (strtotime($_SESSION["ahora"])-strtotime($_SESSION["ultimoAcceso"]));

        if($_SESSION["tiempo_transcurrido"] >= $_SESSION['tiempo']) {
            //si pasaron 10 minutos o más
             session_destroy(); // destruyo la sesión

             $_SESSION["ultimoAcceso"] = 0;
             $_SESSION["ahora"] = 0;
             $_SESSION["tiempo_transcurrido"] = 0;

             header("Location: ../login/index.php");
             //sino, actualizo la fecha de la sesión
           }else {
            $_SESSION["ultimoAcceso"] = $_SESSION["ahora"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include("../../meta_tags.php");
    ?>

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 1000px)">    
    
    <title>Inicio | admin</title>
</head>
<body>
    <a href="../login/index.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>
    <h1>Bienvenido a la vista del administrador</h1>
    <section>
        <a href="../obras/agregar_obra.php">Agregar publicación</a>
        <a href="../obras/modificar_obra.php">Modificar publicación</a>
        <a href="../obras/eliminar_obra.php">Eliminar publicación</a>
        <a href="../noticias/agregar_noticia.php">Agregar noticia</a>
        <a href="../noticias/eliminar_noticia.php">Eliminar noticia</a>
    </section>
</body>