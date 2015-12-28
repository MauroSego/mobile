<?php

$mysqli = new mysqli("192.168.176.14", "server", "root", "mobile");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>