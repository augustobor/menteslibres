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
    <link rel="stylesheet" type="text/css" href="../style_obras_noticias/style.css">
    <link rel="stylesheet" type="text/css" href="../style_obras_noticias/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="../style_obras_noticias/desktop.css" media="screen and (min-width: 800px)"> 
    <title>Admin | publicación</title>
</head>
<body>

    <a href="../main/index.html" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Modificar publicación</h1>
    <h2>Seleccione la fila que desea modificar</h2>
    <table>
        <thead>
            <tr>
                <th>id_obra</th>
                <th>Título</th>
                <th>Categoría</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('./controller/mostrar_publicaciones.php');
            ?>
        </tbody>
    </table>
    <script src="./controller/llevar_datos.js"></script>
</body>