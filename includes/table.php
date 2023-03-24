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
                if ($i == 10) {
                    break;
                }
            }
            echo "</table>";
            echo "<div class='buttons'>";
            echo "<button style='border: none;' title='Anterior'><span class='material-symbols-outlined'>
            arrow_back_ios
            </span></button>";
            echo "1";
            echo "<button style='border: none;' title='Próximo'><span class='material-symbols-outlined'>
            arrow_forward_ios
            </span></button>";
            echo "</div>";
        }
    ?>
</div>