<?php

    require __DIR__ . '/vendor/autoload.php';
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $server = $_ENV['HOST'];
    $user = $_ENV['USER'];
    $password = $_ENV['PASS'];
    $db = $_ENV['NAME'];

    echo "<h2>.$_ENV[USER]</h2>";
    echo "<h2>.$_ENV[HOST]</h2>";
    echo "<h2>.$_ENV[PASS]</h2>";
    echo "<h2>.$_ENV[NAME]</h2>";

    try {
        $conexion = pg_connect("host=$server dbname=$db user=$user password=$password");
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>