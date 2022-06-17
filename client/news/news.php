<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Novedades</title>
</head>
<body>

    <header>
    
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="../about/about.php">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="../contact/contact.php">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="../about/about.php">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="../contact/contact.php">Contacto</a></li>
        </ul>
    </menu>

    <h1>Noticias</h1>
    
    <section>

        <?php
            include('./controller/news_pgsql.php');
        ?>
        
    </section>

    <script src="../menu.js"></script>
    <script src='./lista.js'></script>
</body>