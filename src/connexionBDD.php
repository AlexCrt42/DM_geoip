<?php
define('DB_HOST', 'db');
define('DB_NAME', 'geoip');
define('DB_USER', 'geoip');
define('DB_PWD', 'G301P');

try 
{
    $BDD = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=3306', DB_USER, DB_PWD);
} 
catch (PDOException $e) 
{
    echo 'Erreur de connexion à la BDD : ' . $e->getMessage();
    exit;
}

?>