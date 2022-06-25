<?php
    session_start();

    include("../../conection.php");
    if(!isset($_SESSION['admin'])) {
        header("Location: ../login/index.php");
    }

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
    
    <title>Admin | noticias</title>
</head>
<body>

    <a href="../main/index.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Eliminar noticia</h1>
    <h2>Seleccione la fila que desea eliminar</h2>

    <form class="filter" action="" method="get">
        <input class="filter-value" name="argument" type="text" placeholder="Ingrese su texto aquí"/>
        <select class="filter-value" name="feature" required>
            <option>titulo</option>
        </select>
        <input class="filter-submit" type="submit" value="Buscar"/>
    </form>

    <table>
        <thead>
            <tr>
                <th>id_noticia</th>
                <th>Título</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php

                if($conexion) {

                    if(isset($_GET['argument'])) {

                        $sql = "SELECT id, titulo, fecha
                        FROM noticia 
                        WHERE titulo LIKE '%$_GET[argument]%';";

                        $resultado = pg_query($conexion, $sql);

                        while($row = pg_fetch_row($resultado)) {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "</tr>";
                        }

                        unset($_GET['argument']);

                    } else {
                        include('./controller/mostrar_noticias.php');
                    }
                }
                ?>
        </tbody>
    </table>
    <script src="./controller/llevar_datos_eliminar_noticia.js"></script>
</body>