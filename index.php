<!DOCTYPE html>
<html>
    <head>
        <title>Casos Covid</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <main class="main">
            <h1>Covid-19 no Mundo</h1>
            <?php
                include_once "includes/call_api.php";
                if(isset($_POST['countries'])) {
                    $selected_country = $_POST['countries'];
                    switch($selected_country) {
                        case "1":
                            $country = "Brazil";
                            break;
                        case "2":
                            $country = "Canada";
                            break;
                        case "3":
                            $country = "Russia";
                            break;
                    }
                }
            ?>
            <form method="post" action="" name="form">
                <select name="countries">
                    <option value="0">Escolhe um País</option>
                    <option value="1">Brasil</option>
                    <option value="2">Canada</option>
                    <option value="3">Russia</option>
                </select>
                <input name="submit" type="submit">
            </form>
            <?php include "includes/table.php"; ?>
        </main>
    </body>
</html>