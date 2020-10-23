<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "cccv";
$db = "bronzette";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);




function getAllBuilds($mss)
{
    $query = 'SELECT  * FROM builds';

    $result = $mss->query($query)->fetch_all();

    return $result;
}

function addBuild($mss, $nom, $type)
{
    $query = "INSERT INTO `builds` (`id`, `nom`, `type`) VALUES (NULL, '".$nom."', '".$type."');";

    $result = $mss->query($query);

    return $result;
}

function delBuild($mss, $nom, $type)
{
    $query = "DELETE * FROM `builds` (`id`, `nom`, `type`) VALUES (NULL, '".$nom."', '".$type."');";

    $result = $mss->query($query);

    return $result;
}


?>
