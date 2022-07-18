<?php
    try {
        $conexion = pg_connect("host=ec2-34-239-241-121.compute-1.amazonaws.com dbname=d90jgeq02bkqt6 user=uygtvqcrjchubw password=d488a35d7b72beabf2bd81b5e3a78cf009ce9d81b6b6ba478994713a02541dd0");
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>