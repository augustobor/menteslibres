<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('./meta_tags.php');
    ?>

    <link rel="shortcut icon" href="./assets/favicon.ico">
    <meta name="description" content="Mentes Libres Obras: Augusto.B. Mentes Libres">
    <link rel="stylesheet" type="text/css" href="./menteslibres/obras/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./menteslibres/obras/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./menteslibres/obras/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Obras</title>
</head>
<body>

    <header>
        <img src="./menteslibres/obras/imgs/obras.webp" alt="libros"/>
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="./assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="./inicio.php">Inicio</a></li>
            <li><a href="./quienes_somos.php">Quiénes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="./noticias.php">Noticias</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="./inicio.php">Inicio</a></li>
            <li><a href="./quienes_somos.php">Quiénes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="./noticias.php">Noticias</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </menu>

    <h1>Obras</h1>

    <section class='box'>
        <ul> 
            <h2>Autores</h2>
            <?php
                include("./menteslibres/obras/controller/obras_pgsql.php");
            ?>
        </ul>
    </section>
    <script src='./menteslibres/obras/controller/lista.js'></script>
    <script src='./menteslibres/menu.js'></script>
</body>
