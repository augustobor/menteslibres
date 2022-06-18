<?php
    session_start();
    if(isset($_SESSION['admin'])) {
        unset($_SESSION['admin']);
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
    
    <title>Inicio | login</title>
</head>
<body>

    <h1>Inicia sesión</h1>

    <form action="./sql/iniciar_sesion_pgpsql.php" class="login" method="POST">
        <input class="login_input" type="text" name="user" placeholder="Usuario">
        <hr/>
        <input class="login_input" type="password" name="password" placeholder="Contraseña">
        <hr/>
        <input class="login_submit" type="submit" value="Iniciar sesión"/>
    </form>

    <?php
        include('../mensaje.php');
    ?>
  
</body>