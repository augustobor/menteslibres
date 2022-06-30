<?php
    session_start();
    
    include("../../conection.php");
    if(!isset($_SESSION['admin'])) {
        header("Location: ../login/index.php");
    }else{
        $_SESSION["ahora"] = date("Y-n-j H:i:s");
        $_SESSION["tiempo_transcurrido"] = (strtotime($_SESSION["ahora"])-strtotime($_SESSION["ultimoAcceso"]));

        if($_SESSION["tiempo_transcurrido"] >= $_SESSION['tiempo']) {

             session_destroy(); 

             $_SESSION["ultimoAcceso"] = 0;
             $_SESSION["ahora"] = 0;
             $_SESSION["tiempo_transcurrido"] = 0;

             header("Location: ../login/index.php");

           }else {
            $_SESSION["ultimoAcceso"] = $_SESSION["ahora"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('../../meta_tags.php');
    ?>
    
    <link rel="shortcut icon" href="../../favicon.png">

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

    <h1>Eliminar publicación</h1>
    <h2>Seleccione la fila que desea eliminar</h2>

    <form class="filter" action="" method="get">
        <input class="filter-value" name="argument" type="text" placeholder="Ingrese su texto aquí"/>
        <select class="filter-value" name="feature" required>
            <option>titulo</option>
            <option>nombre</option>
        </select>
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

                    if($conexion) {

                        if(isset($_GET['argument'])) {

                            $sql = "SELECT contenido.id, titulo, categoria, nombre
                            FROM contenido INNER JOIN autor ON autor_id = autor.id
                            WHERE $_GET[feature] LIKE '%$_GET[argument]%';";

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
                            include('./controller/mostrar_publicaciones.php');
                        }
                    }
                ?>
        </tbody>
    </table>
    <script>
        const listElements = document.querySelectorAll('tr');

        listElements.forEach(listElement => {

            listElement.addEventListener('click', () => {
                
                if(confirm('¿Está seguro de eliminar la obra N°' + listElement.querySelector('td').textContent + '?'))
                {
                    window.location = "./sql/eliminar_obra_edicion.php?titulo=" + listElement.querySelector('td').textContent;
                }    
            })
        })
    </script>
</body>