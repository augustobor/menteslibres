<?php
    
    include('vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable('../../');
    $dotenv->load();
    
    $server = $_ENV['HOST'];
    $db = $_ENV['NAME'];
    $user = $_ENV['USER'];
    $password = $_ENV['PASS'];


    // $server = "ec2-34-239-241-121.compute-1.amazonaws.com";
    // $db = "d90jgeq02bkqt6";
    // $user = "uygtvqcrjchubw";
    // $password = "d488a35d7b72beabf2bd81b5e3a78cf009ce9d81b6b6ba478994713a02541dd0";

    $concat = "host=$server dbname=$db user=$user password=$password";
    try {
        $conexion = pg_connect($concat);
        // $conexion = pg_connect("host=".getenv('HOST')." dbname=d90jgeq02bkqt6 user=uygtvqcrjchubw password=d488a35d7b72beabf2bd81b5e3a78cf009ce9d81b6b6ba478994713a02541dd0");
        // $conexion = pg_connect("host=ec2-34-239-241-121.compute-1.amazonaws.com dbname=d90jgeq02bkqt6 user=uygtvqcrjchubw password=d488a35d7b72beabf2bd81b5e3a78cf009ce9d81b6b6ba478994713a02541dd0");
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>