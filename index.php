<?php
session_start();
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
    <header>
        <a href="../index.php"><img class="logo" src="../assets/img/n-reizen-logo.png" alt="logo"></a>
        <nav class="header-buttons">
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <?php if (!isset($_SESSION['userrole'])) { ?>
                    <li><a href="../pages/login-register.php">Log in</a></li>
                <?php } elseif ($_SESSION['userrole'] == 'admin') { ?>
                    <li><a href="../pages/admin-pannel.php">Admin panel</a></li>
                    <li><a href="../dbcalls/login/logout.php">Log out</a></li>
                <?php } else { ?>
                    <li><a href="../dbcalls/login/logout.php">Log out</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <section class="landingspagina">

            <form action="" method="post" class="search-box">
                <h2>Jouw vakantie</h2>
                <label for="aantal-personen">Aantal personen</label>
                <input type="number" name="aantal-personen" id="aantal-personen" placeholder="Aantal personen" min="1"
                    max="8">
                <label for="bestemming">Bestemming</label>
                <input type="text" id="bestemming">
                <label for="datum-trip">Datum van trip</label>
                <input type="date" id="datum-trip" min="2026-05-28">
                <label for="reisduur">Reisduur</label>
                <input type="text" id="reisduur">

                <input class="vind-jouw-vakantie" type="submit" value="Vind jouw vakantie">
            </form>
        </section>

        <section class="voorgestelde-reizen">
            <h1>Onze voorgestelde reizen</h1>
            <div class="voorgestelde-reizen-box-row">
                <div class="voorgestelde-reis"></div>
                <div class="voorgestelde-reis"></div>
                <div class="voorgestelde-reis"></div>
            </div>

            <a href="pages/reizen.php" class="bekijk-alle-reizen-button">Bekijk alle reizen</a>
        </section>
    </main>
    <footer>
        <img class="logo-footer" src="./assets/img/n-reizen-logo.png" alt="logo">

        <ul>
            <li><a href="pages/algemene-voorwaarden.php">Algemene voorwaarden</a></li>
            <li><a href="pages/privacy-policy.php">Privacy policy</a></li>
            <li><a href="pages/over-ons.php">Over ons</a></li>
        </ul>
    </footer>
    <script src="assets/js/index.js"></script>
</body>

</html>