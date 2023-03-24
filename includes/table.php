<div class="table">
    <?php $data = []; ?>
    <?php
        include_once "functions.php";
        include_once "database.php";
        if(isset($_POST['countries'])) {
            
            $covid_data = call_api($country);
            save_access_info($country, $database);
            $data = $covid_data;
            $result = calculate_total_cases_and_deaths($data);
            $total_cases = intval($result["total_cases"]);
            $total_mortes = intval($result["total_deaths"]);
            echo "<p>$country</p>";
            echo "<p>Total de casos: " . number_format($total_cases, 0, "", ".") . "</p>";
            echo "<p>Total de mortes: " . number_format($total_mortes, 0, "", ".") . "</p>";
            echo "<table>";
            echo "<tr><td>Estado/Provincia<td>Total Casos<td>Total Mortes";
            $array_size = sizeof($covid_data);
            for($i = 0; $i < $array_size; $i++) {
                echo "<tr><td>" . $covid_data[$i]['ProvinciaEstado'] . "<td>" . $covid_data[$i]['Confirmados'] . "<td>" . $covid_data[$i]['Mortos'];
            }
            echo "</table>";
        }
    ?>
</div>