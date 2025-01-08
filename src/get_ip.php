<?php

function get_Ip()
{
     return $_SERVER['REMOTE_ADDR']; 
}

function Int_ip($ip)
{
    $elmt = explode('.', $ip);
    if (count($elmt) === 4) 
    {
        return ($elmt[0] * 256**3) + ($elmt[1] * 256**2) + ($elmt[2] * 256) + $elmt[3];
    }
    return false;
}
?>