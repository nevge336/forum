
<?php

$host = 'localhost';
$superuser = 'root';
$password = '';
$dbname = 'forum';
$port = 3306;

$connex = mysqli_connect($host, $superuser, $password, $dbname, $port);

if(!$connex) {
    die("Erreur de connexion : " . mysquli_connect_error());
}

mysqli_set_charset($connex, "utf8");

?>