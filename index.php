<!DOCTYPE html>
<html>
    <head>
        <title>Casos Covid</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <main id="main-container" class="main">
            <h1>Covid-19 no Mundo</h1>
            <?php
                include_once "includes/database.php";
                include_once "includes/call_api.php";
            ?>
            <form method="post" action="" name="form">
                <select name="countries">
                    <option value="0">Escolhe um País</option>
                    <option value="1">Brasil</option>
                    <option value="2">Canada</option>
                    <option value="3">Russia</option>
                </select>
                <input id="btnClick" name="submit" type="submit" value="Buscar">
            </form>
            <?php include "includes/table.php"; ?>
            <?php include "includes/footer.php"; ?>
        </main>
    </body>
</html>