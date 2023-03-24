<footer class="footer">
    <?php
        $result = query_latest_search($database);
        $formatted_date = date('d/m/Y', strtotime($result->data));
        $time = date('H:i:s', strtotime($result->data));
        echo "<p>Último busca: $result->pais em $formatted_date às $time</p>";
    ?>
</footer>