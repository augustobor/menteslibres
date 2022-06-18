<?php
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location: ../login/index.php");
    }
?>
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
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 1000px)">    
    
    <title>Inicio | admin</title>
</head>
<body>

    <a href="../login/index.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>
    <h1>Bienvenido a la vista del administrador</h1>
    <section>
        <a href="../obras/agregar_obra.php">Agregar publicación</a>
        <a href="../obras/modificar_obra.php">Modificar publicación</a>
        <a href="../obras/eliminar_obra.php">Eliminar publicación</a>
        <a href="../noticias/agregar_noticia.php">Agregar noticia</a>
        <a href="../noticias/eliminar_noticia.php">Eliminar noticia</a>
    </section>
</body>