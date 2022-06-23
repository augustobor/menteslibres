<?php
    session_start();
    
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
    <title>Admin | publicación</title>
</head>
<body>

    <a href="../main/index.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Modificar publicación</h1>
    <h2>Seleccione la fila que desea modificar</h2>
    <form class="filter" action="./controller/filter/filtrar.php" method="POST">
        <input class="filter-value" name="argument" type="text" placeholder="Ingrese su texto aquí"/>
        <input class="filter-submit" type="submit" value="Buscar"/>
    </form>
    <table>
        <thead>
            <tr>
                <th>id_obra</th>
                <th>Título</th>
                <th>Categoría</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php

                echo "$argv";

                if(isset($_SESSION['filtrado'])) {

                    while($row = pg_fetch_row($_SESSION['filtrado'])) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }

                    unset($_SESSION['filtrado']);
                } else {
                    include('./controller/mostrar_publicaciones.php');
                }
            ?>
        </tbody>
    </table>
    <script>
        const listElements = document.querySelectorAll('tr');

        listElements.forEach(listElement => {

            listElement.addEventListener('click', () => {
                
                window.location = "./modificar_obra_edicion.php?titulo=" + listElement.querySelector('td').textContent;
                
            })
        })
    </script>
</body>