<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('./meta_tags.php');
    ?>
    
    <link rel="shortcut icon" href="./assets/favicon.ico">
    <meta name="description" content="Mentes Libres Noticias: Augusto.B. Mentes Libres">
    <link rel="stylesheet" type="text/css" href="./menteslibres/news/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./menteslibres/news/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./menteslibres/news/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Novedades</title>
</head>
<body>

    <header>
    
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="./assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="./inicio.php">Inicio</a></li>
            <li><a href="./quienes_somos.php">Quiénes somos</a></li>
            <li><a href="./obras.php">Obras</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="./inicio.php">Inicio</a></li>
            <li><a href="./quienes_somos.php">Quiénes somos</a></li>
            <li><a href="./obras.php">Obras</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </menu>

    <h1>Noticias</h1>
    
    <section class='media'>

        <?php
            require('./menteslibres/news/controller/news_pgsql.php');
        ?>
        
    </section>

    <script src="./menteslibres/menu.js"></script>
    <script src='./menteslibres/news/lista.js'></script>
</body>
