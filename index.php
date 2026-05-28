<?php
include("./dbcalls/conn.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N-reizen</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <header class="middle-blue header font-inter-white">
        <img class="logo" src="./assets/img/placeholder-300x300.png" alt="logo">
        <div class="header-buttons">
            <h2>Contact</h2>
            <h2>Log in</h2>
        </div>
    </header>
    <main>
        <section class="landingspagina">

            <form action="" method="" class="search-box">
                <label>Jouw vakantie</label>
                <label for="aantal-personen">Aantal personen</label>
                <input type="number" name="aantal-personen" id="aantal-personen" placeholder="Aantal personen" min="1"
                    max="8">
                <label class="search-box-text" for="bestemming">Bestemming</label>
                <input type="text" id="bestemming">
                <label class="search-box-text" for="datum-trip">Datum van trip</label>
                <input type="date" id="datum-trip">
                <label class="search-box-text" for="reisduur">Reisduur</label>
                <input type="text" id="reisduur">

                <input type="submit" value="Vind jouw vakantie">
            </form>

        </section>
    </main>
    <script src="assets/js/index.js"></script>
</body>

</html>