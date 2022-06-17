<?php
    session_start();
    error_reporting(0);
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
    
    <title>Admin | noticias</title>
</head>
<body>

    <a href="../main/index.html" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Eliminar noticia</h1>
    <h2>Seleccione la fila que desea eliminar</h2>
    <table>
        <thead>
            <tr>
                <th>id_noticia</th>
                <th>Título</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('./controller/mostrar_noticias.php');
            ?>
        </tbody>
    </table>
    <script src="./controller/llevar_datos_eliminar_noticia.js"></script>
</body>