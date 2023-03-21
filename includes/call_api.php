<?php
function call_api() {
    $cURL = curl_init();
    $setopt_array = array(CURLOPT_URL => "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Argentina", CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => array());
    curl_setopt_array($cURL, $setopt_array);
    $json_response_data = curl_exec($cURL);
    print_r($json_response_data);
    curl_close($cURL);
}