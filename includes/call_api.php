<?php
function call_api() {
    $cURL = curl_init();
    $setopt_array = array(CURLOPT_URL => "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Brazil",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'));
    curl_setopt_array($cURL, $setopt_array);
    $json_response_data = curl_exec($cURL);
    $response_array = json_decode($json_response_data, true);
    curl_close($cURL);

    return $response_array;
}