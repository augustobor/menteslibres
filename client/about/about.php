<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Quienes Somos</title>
</head>
<body>

    <header>
        <img src="./imgs/header_convivencia.png" alt="foto de convivencia"/>
    </header>

    <nav>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="#">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="../contact/contact.php">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="#">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="../contact/contact.php">Contacto</a></li>
        </ul>
    </menu>


    <section>
        <article>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nostrum delectus tempora debitis optio ipsam ex porro necessitatibus voluptas, 
                facilis officia voluptatibus, sint voluptate sunt neque architecto blanditiis 
                vitae, ea velit.
            </p>
            <hr/>
        </article>
        <img src="./imgs/convivencia_1.png" alt="En estudio"/>
    </section>

    <section>
        <img src="./imgs/convivencia_2.png" alt="Jugando"/>
        <article>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nostrum delectus tempora debitis optio ipsam ex porro necessitatibus voluptas, 
                facilis officia voluptatibus, sint voluptate sunt neque architecto blanditiis 
                vitae, ea velit.
            </p>
            <hr/>
        </article>
    </section>
    <script src="../menu.js"></script>
</body>