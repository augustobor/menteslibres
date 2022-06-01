<?php
    $server = "localhost";
    $user = "postgres";
    $password = "Roma2018";
    $db = "pabellon_literario_db";

    try {
        $conexion = pg_connect("host=localhost dbname=pabellon_literario_db user=postgres password=Roma2018");
        // pg_set_client_encoding($conexion, "utf8");
    } catch (PDOEception $e) {
        echo "La conexión falló: " . $e->getMessage();

    }

    return $conexion;
?>