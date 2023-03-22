<div class="table">
    <?php #$selected_country = "Brasil"; ?>
    <p><?php #echo $selected_country; ?></p>
    <table>
        <?php
            if(isset($_POST['countries'])) {
                echo "<tr><td>Provincia/Estado<td>Total Casos<td>Total Mortes";
                $covid_data = call_api($country);
                $array_size = sizeof($covid_data);
                for($i = 0; $i < $array_size; $i++) {
                    echo "<tr><td>" . $covid_data[$i]['ProvinciaEstado'] . "<td>" . $covid_data[$i]['Confirmados'] . "<td>" . $covid_data[$i]['Mortos'];
                }
        }
        ?>
    </table>
</div>