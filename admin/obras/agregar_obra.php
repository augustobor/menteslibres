<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('../../meta_tags.php');
    ?>

    <link rel="stylesheet" type="text/css" href="../style_obras_noticias/style.css">
    <link rel="stylesheet" type="text/css" href="../style_obras_noticias/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="../style_obras_noticias/desktop.css" media="screen and (min-width: 800px)"> 

    <title>Admin | publicación</title>
</head>
<body>

    <a href="../main/index.html" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Agregar publicación</h1>
   
    <form action="./sql/insertar_publicacion.php" id="form" method="POST">
        <input name="titulo" id="obra--name" type="text" placeholder="Nombre de la obra" required/>
        <select name="categories" id="obra--categoria" placeholder="Categoria" required>
            
            <?php
                include('./controller/mostrar_categorias.php');
            ?>

        </select>
        <input name="autor" id="obra--autor" type="text" placeholder="Autor" required/>
        <textarea name="contenido" id="obra--contenido" rows=10 cols="30" placeholder="Obra" required></textarea>
        <button id="submit-button" type="submit" form="form">Agregar</button>
    </form>


</body>