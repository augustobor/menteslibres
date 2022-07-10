<?php

    // require __DIR__ . '/vendor/autoload.php';
    
    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // $dotenv->load();

    $server = process.env.HOST;
    $user = process.env.USER;
    $password = process.env.PASS; 
    $db = process.env.NAME;

    try {
        $conexion = pg_connect("host=$server dbname=$db user=$user password=$password");
    } catch (PDOEception $e) {
        echo "La conexión falló: " . $e->getMessage();

    }

    return $conexion;
?>