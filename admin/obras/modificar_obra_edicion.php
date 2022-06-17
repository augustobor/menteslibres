<?php
    error_reporting(0);
    session_start();
    $_SESSION['id_obra'] = $_REQUEST['titulo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="../styles/desktop.css" media="screen and (min-width: 800px)"> 

    <title>Admin | modificar</title>
</head>
<body>

    <a href="./modificar_obra.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>
   
    <form action="./sql/actualizar_publicacion.php" id="form" method="POST">

        <?php
            include('./controller/mostrar_publicacion_a_editar.php');
        ?>
        <button id="submit-button" type="submit" form="form">Actualizar</button>
    </form>


</body>