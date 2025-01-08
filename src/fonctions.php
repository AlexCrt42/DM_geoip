<?php
require_once 'connexionBDD.php';
require_once 'get_ip.php';

function ipFrance($ip) {
    global $bdd;

    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) 
    {
        $requete = $bdd->prepare('SELECT country_code FROM ip2location WHERE ip_from <= :ip AND ip_to >= :ip');
        $ipLong = Int_ip($ip);
        $requete->bindParam(':ip', $ipLong, PDO::PARAM_INT);
        $requete->execute();
        $pays = $requete->fetch(PDO::FETCH_ASSOC);
        if ($pays && $pays['country_code'] == 'FR') 
        {
            return true;
        }
    } 
    return false;
}
?>
