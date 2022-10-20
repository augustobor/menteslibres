<?php
    try {
        $string="host=dpg-cd317lmn6mpqnrg7p5q0-a.oregon-postgres.render.com dbname=mentes_libres_db user=mentes_libres_db_user password=APT8E5buDxMwKUe8Ov3IkxBa0RiSjIBi";
        $conexion = pg_connect($string) or die('Could not connect: '. pg_last_error());
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>