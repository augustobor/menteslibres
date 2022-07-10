<?php

    echo "<h2>bbbbb</h2>";
    
    require('vendor/autoload.php');
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    echo "<h2>aaaa</h2>";

    $server = $_ENV['HOST'];
    $user = $_ENV['USER'];
    $password = $_ENV['PASS'];
    $db = $_ENV['NAME'];

    echo "<h2>$server</h2>";
    echo "<h2>$user</h2>";
    echo "<h2>$password</h2>";
    echo "<h2>$db</h2>";

    try {
        $conexion = pg_connect("host=$server dbname=$db user=$user password=$password");
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>