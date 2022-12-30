<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../meta_tags.php');
    ?>

    <link rel="shortcut icon" href="../assets/favicon.ico">
    <meta name="description" content="Mentes Libres Home Page: Augusto.B. Mentes Libres">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./main/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./main/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./main/styles/desktop.css" media="screen and (min-width: 800px)">    
    
    <title>Inicio</title>
</head>
<body>

    <header>
        <img src="./main/imgs/cabecera_inicio.webp" alt="pabellón literario"/>
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="#">Inicio</a></li>
            <li><a href="./quienes_somos.php">Quiénes somos</a></li>
            <li><a href="./obras.php">Obras</a></li>
            <li><a href="./noticias.php">Noticias</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="./quienes_somos.php">Quiénes somos</a></li>
            <li><a href="./obras.php">Obras</a></li>
            <li><a href="./noticias.php">Noticias</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </menu>


    <section>
        <article>
            <p>
                Estás en Mentes Libres: un espacio de Literatura, Poesía y Filosofía. 
                Acá encontrarás nuestros escritos realizados en el Pabellón Literario 
                ¡Siéntete libre de navegar por el maravilloso mundo de las palabras!
            </p>
            <hr/>
        </article>
        <img src="./main/imgs/inicio_1.webp" alt="foto de entrega de obras"/>
    </section>

    <section>
        <img src="./main/imgs/inicio_2.webp" alt="foto presentando obra"/>
        <article>
            <p>
            Todo esto es posible gracias a la dedicación de cada escritor de Mentes Libres. 
            Y también gracias a quienes promueve la educación dentro de los pabellones.
            </p>
            <hr/>
        </article>
    </section>
    <footer>
        <p>website made by Augusto Borromeo</p>
        <div>
            <a target="_blank" class="github" href="https://github.com/augustobor" rel="noreferrer">
                <img src="./main/imgs/bxl-github.svg" alt="imagen de github">
            </a>
            <a target="_blank" class="linkedin" href="https://www.linkedin.com/in/augusto-borromeo-b75255218/" rel="noreferrer">
                <img src="./main/imgs/bxl-linkedin-square.svg" alt="foto de linkedin">
            </a>
        </div>
    </footer>
    <script src="./menu.js"></script>
</body>
