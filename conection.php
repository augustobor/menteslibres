<?php
    try {
        #$string="host=dpg-cd317lmn6mpqnrg7p5q0-a.oregon-postgres.render.com dbname=mentes_libres_db user=mentes_libres_db_user password=APT8E5buDxMwKUe8Ov3IkxBa0RiSjIBi";
        $conexion = pg_connect("host=ec2-34-239-241-121.compute-1.amazonaws.com dbname=d90jgeq02bkqt6 user=uygtvqcrjchubw password=d488a35d7b72beabf2bd81b5e3a78cf009ce9d81b6b6ba478994713a02541dd0") or die('Could not connect: '. pg_last_error());
    } catch (PDOEception $e) {
        echo "La conexión falló: . $e->getMessage()";

    }

    return $conexion;
?>