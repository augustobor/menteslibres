<?php
    
    //Trabajar con este modelo de conexión para deploy 
        
    require('vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable('../../');
    $dotenv->load();    

    $server = $_ENV['HOST'];
    $db = $_ENV['NAME'];
    $user = $_ENV['USER'];
    $password = $_ENV['PASS'];

    $concat = "host=$server dbname=$db user=$user password=$password";
    try {
        $conexion = pg_connect($concat);
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>