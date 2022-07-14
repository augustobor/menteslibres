<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="shortcut icon" href="../../favicon.png">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Obras</title>
</head>
<body>

    <header>
        <img src="./imgs/obras.webp" alt="libros"/>
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="../main/index">Inicio</a></li>
            <li><a href="../about/about">Quiénes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="../news/news">Noticias</a></li>
            <li><a href="../contact/contact">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="../main/index">Inicio</a></li>
            <li><a href="../about/about">Quiénes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="../news/news">Noticias</a></li>
            <li><a href="../contact/contact">Contacto</a></li>
        </ul>
    </menu>

    <h1>Obras</h1>

    <section class='box'>
        <ul> 
            <h2>Autores</h2>
            <?php
                include("./controller/obras_pgsql.php");
            ?>
        </ul>
    </section>
    <script src='./controller/lista.js'></script>
    <script src='../menu.js'></script>
</body>