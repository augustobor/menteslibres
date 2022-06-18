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

    <h1>Eliminar publicación</h1>
    <h2>Seleccione la fila que desea eliminar</h2>
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
                include('./controller/mostrar_publicaciones.php');
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