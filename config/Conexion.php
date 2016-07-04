<?php

class Conexion {

// Conectarse a MySQL
    function getConnection() {
        $link = mysqli_connect("localhost", "root", "root", "dbturismo");
        if (!$link) {

            die('Error al conectarse a mysql: ' . mysql_error());
        }return $link;
    }

}

?>