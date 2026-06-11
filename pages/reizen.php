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
            <form action="" method="post" class="search-filter-reizen-page">

                <div>
                    <input class="input-box-search-filter" type="number" name="aantal-personen" id="aantal-personen"
                        placeholder="Aantal personen" min="1" max="8">

                    <input class="input-box-search-filter" type="date" id="datum-trip" min="2026-05-28"
                        placeholder="Datum">

                    <input class="input-box-search-filter" type="text" id="reisduur" placeholder="Reisduur">

                    <div class="bestemming-column">
                        <label id="bestemming-tag" for="bestemming">Bestemming</label>
                        <input class="input-box-search-filter" type="text" id="bestemming" placeholder="Spanje">
                    </div>
                </div>
                <div>
                    <h3>Luchthavens</h3>
                    <div>
                        <input type="checkbox" id="luchthaven1">
                        <label for="luchthaven1">Luchthaven1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="luchthaven2">
                        <label for="luchthaven2">Luchthaven2</label>
                    </div>
                    <div>
                        <input type="checkbox" id="luchthaven3">
                        <label for="luchthaven3">Luchthaven3</label>
                    </div>
                    <div>
                        <input type="checkbox" id="luchthaven4">
                        <label for="luchthaven4">Luchthaven4</label>
                    </div>
                </div>

                <div>
                    <h3>Verblijf</h3>
                    <div>
                        <input type="checkbox" id="apartement">
                        <label for="apartement">Apartement</label>
                    </div>
                    <div>
                        <input type="checkbox" id="resort">
                        <label for="resort">Resort</label>
                    </div>
                    <div>
                        <input type="checkbox" id="hotel">
                        <label for="hotel">Hotel</label>
                    </div>

                    <div>
                        <h3>Type vakantie</h3>
                        <div>
                            <input type="checkbox" id="strand">
                            <label for="stand">Strand</label>
                        </div>
                        <div>
                            <input type="checkbox" id="stedentrip">
                            <label for="stedentrip">Stedentrip</label>
                        </div>
                        <div>
                            <input type="checkbox" id="rondreis">
                            <label for="rondreis">Rondreis</label>
                        </div>
                        <div>
                            <input type="checkbox" id="wellness">
                            <label for="wellness">Wellness</label>
                        </div>
                    </div>

                    <input class="search-filter-submit-button" type="submit" value="Zoek">
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