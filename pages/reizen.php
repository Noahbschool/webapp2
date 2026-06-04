<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reizen</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <header>
        <a href="../index.php"><img class="logo" src="../assets/img/n-reizen-logo.png" alt="logo"></a>
        <nav class="header-buttons">
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login-register.php">Log in</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="reizen-search-box">
            <form action="">
                <label for="aantal-personen">Aantal personen</label>
                <input type="number" name="aantal-personen" id="aantal-personen" placeholder="Aantal personen" min="1"
                    max="8">
                <label class="search-box-text" for="datum-trip">Datum van trip</label>
                <input type="date" id="datum-trip" min="2026-05-28">
                <label class="search-box-text" for="reisduur">Reisduur</label>
                <input type="text" id="reisduur">
            </form>
        </section>
    </main>

    <footer>
        <img class="logo-footer" src="../assets/img/n-reizen-logo.png" alt="logo">

        <ul>
            <li><a href="algemene-voorwaarden.php">Algemene voorwaarden</a></li>
            <li><a href="privacy-policy.php">Privacy policy</a></li>
            <li><a href="over-ons.php">Over ons</a></li>
        </ul>
    </footer>
</body>

</html>