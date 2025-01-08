<?php
require_once 'get_ip.php';
require_once 'fonctions.php';

$ip = get_Ip();

if (ipFrance($ip)) 
{
    include './france.php';
} 
else 
{
    include './pas_france.php';
}
?>

