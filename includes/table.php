<div class="table">
    <?php $data = []; ?>
    <?php
        include "functions.php";
        if(isset($_POST['countries'])) {
            
            $covid_data = call_api($country);
            $data = $covid_data;
            $result = calculate_total_cases_and_deaths($data);
            $total_cases = $result["total_cases"];
            $total_mortes = $result["total_deaths"];
            echo "<p>$country</p>";
            echo "<p>Total cases: " . $total_cases . "</p>";
            echo "<p>Total de mortes: " . $total_mortes . "</p>";
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