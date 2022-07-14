<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('../meta_tags.php');
    ?>

    <link rel="shortcut icon" href="../assets/favicon.ico">

    <link rel="stylesheet" type="text/css" href="./obras/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./obras/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./obras/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Obras</title>
</head>
<body>

    <header>
        <img src="./obras/imgs/obras.webp" alt="libros"/>
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="./inicio">Inicio</a></li>
            <li><a href="./quienes_somos">Quiénes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="./noticias">Noticias</a></li>
            <li><a href="./contacto">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="./inicio">Inicio</a></li>
            <li><a href="./quienes_somos">Quiénes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="./noticias">Noticias</a></li>
            <li><a href="./contacto">Contacto</a></li>
        </ul>
    </menu>

    <h1>Obras</h1>

    <section class='box'>
        <ul> 
            <h2>Autores</h2>
            <?php
                require("./obras/controller/obras_pgsql.php");
            ?>
        </ul>
    </section>
    <script src='./obras/controller/lista.js'></script>
    <script src='./menu.js'></script>
</body>