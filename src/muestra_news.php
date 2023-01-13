<?php
    session_start();
    $_SESSION['titulo'] = $_REQUEST['titulo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('./meta_tags.php');
    ?>
    
    <link rel="shortcut icon" href="./assets/favicon.ico">
    <meta name="description" content="Mentes Libres Noticia: Augusto.B. Mentes Libres">
    <link rel="stylesheet" type="text/css" href="./menteslibres/news/controller/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./menteslibres/news/controller/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./menteslibres/news/controller/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title></title>
</head>
<body>

    <a href="./noticias.php" class="btn-home">
        <img src="./assets/arrow-left.svg" alt='botón'>
    </a>

    <?php 
        include('./menteslibres/news/controller/muestra_news_pgsql.php');
    ?>

</body>
