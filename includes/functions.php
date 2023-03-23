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