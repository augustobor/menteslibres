<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="../styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rek="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../richtext/richtext.min.css">
    <script src="https://kit.fontawesome.com/5dbe99bbbf.js" crossorigin="anonymous"></script>
    <script src= "../richtext/jquery.richtext.js"></script>

    <title>Admin | noticias</title>
</head>
<body>
<a href="../main/index.html" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Agregar noticia</h1>
   
    <form action="./sql/insertar_noticia.php" id="form" method="POST">
        <input name="titulo" type="text" placeholder="Titulo de la noticia" required/>
        
        <div>
            <p id='input--fecha'></p>
        </div>

        <input type="text" id="RichText" name="noticia" required/>
        <script>
            $(document).ready(function() {
                $("#RichText").richText();
            });
        </script>
        
        <button type="submit" form="form">Agregar</button>
    </form>
    
    <script>
        
        const fecha = new Date();

        document.getElementById("input--fecha").innerHTML ="Fecha: " + fecha.getFullYear() + "-" 
        + (fecha.getMonth() + 1) + "-" 
        + fecha.getDate();

    </script>
</body> 