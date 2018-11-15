<?php

$hostname = "localhost";
$database = "medivac_cms";
$username = "medivac_admin";
$password = "RT{b9QTHFCy8";

$mysqli = new mysqli($hostname, $username, $password, $database);
if($mysqli->connect_errno){
    echo "Fallo al contectar a MySQL: (" .$mysqli->connect_errno. ") ".$mysqli->connect_error;
}

$mysqli->set_charset('utf8');