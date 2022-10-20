<?php
    try {
        $string="host=$_ENV[PG_HOST] dbname=$_ENV[PG_DB_NAME] user=$_ENV[PG_USER] password=$_ENV[PG_PASS]";
        $conexion = pg_connect($string) or die('Could not connect: '. pg_last_error());
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>