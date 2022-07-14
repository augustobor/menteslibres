<?php
    session_start();
    $_SESSION['titulo'] = $_REQUEST['titulo'];
?>
<!DOCTYPE html>
<html lang="en" onselectstart= 'return false'>
<head>

    <?php
        include('../meta_tags.php');
    ?>

    <link rel="shortcut icon" href="../assets/favicon.ico">

    <link rel="stylesheet" type="text/css" href="./obras/controller/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./obras/controller/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./obras/controller/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title></title>
</head>
<body>

    <a href="./obras.php" class="btn-home">
        <img src="../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php 
        include('./obras/controller/muestra_pgsql.php');
    ?>

</body>