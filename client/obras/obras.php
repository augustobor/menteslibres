<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rasa:wght@300;400&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Obras</title>
</head>
<body>

    <header>
        <img src="#" alt="foto_1"/>
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../../imgs/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="../main/index.html">Inicio</a></li>
            <li><a href="../about/about.html">Quienes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="../contact/contact.html">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="../main/index.html">Inicio</a></li>
            <li><a href="../about/about.html">Quienes somos</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="../contact/contact.html">Contacto</a></li>
        </ul>
    </menu>

    <h1>Obras</h1>

    <section>
        <ul> 
            <h2>Autores</h2>
            <?php
                include("./obras_pgsql.php");
            ?>
        </ul>
    </section>
    <script src='./lista.js'></script>
    <script src='../../menu.js'></script>
</body>