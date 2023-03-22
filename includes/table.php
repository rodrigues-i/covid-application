<div class="table">
    <?php $data = []; #$selected_country = "Brasil"; ?>
    <p><?php #echo $selected_country; ?></p>
    <table>
        <?php
            if(isset($_POST['countries'])) {
                echo "<p>$country</p>";
                echo "<tr><td>Provincia/Estado<td>Total Casos<td>Total Mortes";
                $covid_data = call_api($country);
                $data = $covid_data;
                $array_size = sizeof($covid_data);
                for($i = 0; $i < $array_size; $i++) {
                    echo "<tr><td>" . $covid_data[$i]['ProvinciaEstado'] . "<td>" . $covid_data[$i]['Confirmados'] . "<td>" . $covid_data[$i]['Mortos'];
                }
        }
        ?>
    </table>
    <?php
        include "functions.php";
        $result = calculate_total_cases_and_deaths($data);
        $total_cases = $result["total_cases"];
        $total_deaths = $result["total_deaths"];
        echo "<p>Total cases: " . $total_cases . "</p>";
        echo "<p>Total de mortes " . $total_deaths . "</p>";
    ?>
</div>