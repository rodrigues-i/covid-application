<?php
try {
    $database = new mysqli("localhost", "root", "", "banco");

    $database->query("SET NAMES utf8");
    $database->query("SET character_set_connection=utf8");
    $database->query("SET character_set_client=utf8");
    $database->query("SET character_set_results=utf8");

}catch(mysqli_sql_exception $e) {
    echo "<p>Houve um erro ao tentar conectar-se ao banco de dados</p>";
    die();
}