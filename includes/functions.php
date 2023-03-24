<?php

function calculate_total_cases_and_deaths($data) {
    $total_cases = 0;
    $total_deaths = 0;

    for($i = 0; $i < sizeof($data); $i++) {
        $total_cases += $data[$i]["Confirmados"];
        $total_deaths += $data[$i]["Mortos"];
    }

    return ["total_cases" =>$total_cases, "total_deaths" =>$total_deaths];

}

function save_access_info($country, $database) {
    date_default_timezone_set('America/Sao_Paulo');
    $date_time = date('Y-m-d H:i:s');
    $query = "insert into buscas(data, pais) values('$date_time', '$country')";
    $database->query($query);
}

function query_latest_search($database) {
    $query = "select * from buscas order by id desc limit 1";
    $obj = $database->query($query);
    if($obj->num_rows == 1) {
        $result = $obj->fetch_object();
        return $result;
    }
}