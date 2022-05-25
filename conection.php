<?php
    $server = "localhost";
    $user = "postgres";
    $password = "Roma2018";
    $db = "pabellon_literario_db";

    try {
        $conexion = new PDO("pgsql:host=$server;dbname=$db", $user, $password);
        
    } catch (PDOEception $e) {
        echo "La conexión falló: " . $e->getMessage();

    }

    return $conexion;
?>