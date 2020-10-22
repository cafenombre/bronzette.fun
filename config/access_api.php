<?php
// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

function CallApi($url){

    // create & initialize a curl session
    $curl = curl_init();
    $apiKey = "RGAPI-015b5a64-2c6b-49b9-8c8f-441712eaf13a";

    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, $url);

    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // curl_exec() executes the started curl session
    // $output contains the output string
    $output = curl_exec($curl);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: ' . $apiKey
    ));

    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);

    return $output;
}

$r = json_decode(CallAPI("http://ddragon.leagueoflegends.com/cdn/10.21.1/data/en_US/champion.json"), true)["data"];

//var_dump($r["Shaco"]);

$rando = rand(0, count($r));

$i = 0;
foreach($r as $champ){
    if($i == $rando){
        echo $champ["id"];
    }
    $i++;
}

?>