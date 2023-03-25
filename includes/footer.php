<footer class="footer">
    <?php
        $result = query_latest_search($database);
        if($result) {
            $formatted_date = date('d/m/Y', strtotime($result->data));
            $time = date('H:i:s', strtotime($result->data));
            echo "<p>Última busca: $result->pais em $formatted_date às $time</p>";
        }
    ?>
</footer>