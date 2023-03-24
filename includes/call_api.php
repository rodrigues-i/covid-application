<?php
$country = "";

function call_api($country) {
    $cURL = curl_init();
    $setopt_array = array(CURLOPT_URL => "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=$country",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'));
    curl_setopt_array($cURL, $setopt_array);
    $json_response_data = curl_exec($cURL);
    $response_array = json_decode($json_response_data, true);
    curl_close($cURL);

    return $response_array;
}

if(isset($_POST['countries'])) {
    $selected_country = $_POST['countries'];
    switch($selected_country) {
        case "1":
            $country = "Brazil";
            break;
        case "2":
            $country = "Canada";
            break;
        case "3":
            $country = "Russia";
            break;
    }
}