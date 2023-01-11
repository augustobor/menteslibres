<?php
    error_reporting(0);
    try {
        $string="host=$_ENV[PG_HOST] dbname=$_ENV[PG_DB_NAME] user=$_ENV[PG_USER] password=$_ENV[PG_PASS]";
        $conexion = pg_connect($string) or die('<h4>Lo sentimos. Tenemos un error en el servidor :(</h4>'. pg_last_error());
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";
    }

    return $conexion;
?>