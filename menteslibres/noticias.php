<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../meta_tags.php');
    ?>
    
    <link rel="shortcut icon" href="../assets/favicon.ico">

    <link rel="stylesheet" type="text/css" href="./news/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./news/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./news/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Novedades</title>
</head>
<body>

    <header>
    
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="./inicio">Inicio</a></li>
            <li><a href="./quienes_somos">Quiénes somos</a></li>
            <li><a href="./obras">Obras</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="./contacto">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="./inicio">Inicio</a></li>
            <li><a href="./quienes_somos">Quiénes somos</a></li>
            <li><a href="./obras">Obras</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="./contacto">Contacto</a></li>
        </ul>
    </menu>

    <h1>Noticias</h1>
    
    <section class='media'>

        <?php
            require('./news/controller/news_pgsql.php');
        ?>
        
    </section>

    <script src="./menu.js"></script>
    <script src='./news/lista.js'></script>
</body>