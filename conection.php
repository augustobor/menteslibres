<?php

    // echo "<h2>bbbbb</h2>";
    
    // require('vendor/autoload.php');
    
    // $dotenv = Dotenv\Dotenv::createImmutable('../../');
    // $dotenv->load();

    // echo "<h2>aaaa</h2>";

    // $server = $_ENV['HOST'];
    // $user = $_ENV['USER'];
    // $password = $_ENV['PASS'];
    // $db = $_ENV['NAME'];

    // echo "<h2>$server</h2>";
    // echo "<h2>$user</h2>";
    // echo "<h2>$password</h2>";
    // echo "<h2>$db</h2>";

    try {
        // $conexion = pg_connect("host=$server dbname=$db user=$user password=$password");
        $conexion = pg_connect("host=ec2-34-239-241-121.compute-1.amazonaws.com dbname=d90jgeq02bkqt6 user=uygtvqcrjchubw password=d488a35d7b72beabf2bd81b5e3a78cf009ce9d81b6b6ba478994713a02541dd0");
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>