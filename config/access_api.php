<?php
// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

function CallApi($url){

    // create & initialize a curl session
    $curl = curl_init();
    $apiKey = "RGAPI-956a0547-c8ab-4a3d-b14e-0d098d57016e";

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


?>
