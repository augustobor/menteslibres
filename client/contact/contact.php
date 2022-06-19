<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Contacto</title>
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
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="../about/about.php">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </menu>


    <section>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Sapiente eaque molestias ducimus, rerum consectetur nisi consequuntur. 
            Soluta corporis laudantium facilis totam, tenetur fugiat, 
            nobis sunt id sint impedit hic accusamus.
        </p>

        <form action="" id="form">
            <input name="name" id="contact--name" type="text" placeholder="Nombre" required/>
            <input name="email" id="contact--email" type="email" placeholder="Email" required/>
            <input name="matter" id="contact--thread" type="text" placeholder="Asunto" required/>
            <textarea name="message" id="contact--message" rows=10 cols="30" placeholder="Mensaje" required></textarea>
            <button id="submit-button" type="submit" form="form">Enviar</button>
        </form>
        <a id="mail-button" href="mailto:menteslibres.pabellonliterario@gmail.com"></a>
    </section>

    <section class="cafecito">

        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Sapiente eaque molestias ducimus, rerum consectetur nisi consequuntur. 
            Soluta corporis laudantium facilis totam, tenetur fugiat, 
            nobis sunt id sint impedit hic accusamus.
        </p>
        <a href="https://cafecito.app/sebaiako" class="cafe">
            <img src="./imgs/coffe.svg" alt="cafecito"/>
            <p>Lorem</p>
        </a>
    </section>
    <script src="../menu.js"></script>
</body>