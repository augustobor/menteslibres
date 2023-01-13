<?php
    session_start();
    $_SESSION['titulo'] = $_REQUEST['titulo'];
?>
<!DOCTYPE html>
<html lang="en" onselectstart= 'return false'>
<head>

    <?php
        include('./meta_tags.php');
    ?>

    <link rel="shortcut icon" href="./assets/favicon.ico">
    <meta name="description" content="Mentes Libres Obra: Augusto.B. Mentes Libres">
    <link rel="stylesheet" type="text/css" href="./menteslibres/obras/controller/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./menteslibres/obras/controller/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./menteslibres/obras/controller/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title></title>
</head>
<body>

    <a href="./obras.php" class="btn-home">
        <img src="./assets/arrow-left.svg" alt='botón'>
    </a>

    <?php 
        include('./menteslibres/obras/controller/muestra_pgsql.php');
    ?>

</body>
