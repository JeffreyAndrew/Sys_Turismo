<?php

// Conectarse a MySQL
$link = mysqli_connect("localhost", "root", "root", "dbturismo");
if (!$link) {
    
    die('Error al conectarse a mysql: ' . mysql_error());
}

echo "Éxito al conectar" . PHP_EOL;
?>