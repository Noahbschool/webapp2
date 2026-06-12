<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reis toevoegen</title>
    <link rel="stylesheet" href="/assets/css/style.css">
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

    <main class="add-container">

        <h1>Reis toevoegen</h1>

        <form method="post" action="/dbcalls/create.php" class="add-form">

            <label>Titel</label>
            <input type="text" name="titel" required><br>

            <label>Locatie</label>
            <input type="text" name="locatie" required><br>

            <label>Prijs</label>
            <input type="number" name="prijs" step="0.01" required><br>

            <label>Luchthaven</label>
            <input type="text" name="luchthaven"><br>

            <label>Locatie link</label>
            <input type="text" name="locatie_link"><br>

            <label>Afbeelding 1</label>
            <input type="text" name="afbeelding"><br>

            <label>Afbeelding 2</label>
            <input type="text" name="afbeelding2"><br>

            <label>Afbeelding 3</label>
            <input type="text" name="afbeelding3"><br>

            <label>Afbeelding 4</label>
            <input type="text" name="afbeelding4"><br>

            <label>Afbeelding 5</label>
            <input type="text" name="afbeelding5"><br>

            <h3>(ja/nee)</h3><br>

            <label>Ontbijt</label>
            <input type="text" name="ontbijt"><br>

            <label>Wifi</label>
            <input type="text" name="wifi"><br>

            <label>Zwembad</label>
            <input type="text" name="zwembad"><br>

            <label>Restaurant</label>
            <input type="text" name="restaurant"><br>

            <label>Wellness</label>
            <input type="text" name="wellness"><br>

            <label>Badkamer</label>
            <input type="text" name="badkamer"><br>

            <label>Huisdieren toegestaan</label>
            <input type="text" name="huisdieren"><br>

            <label>Volledige Beschrijving</label><br>
            <textarea name="beschrijving_lang" rows="5"></textarea><br>

            <div class="form-actions">
                <button type="submit" name="toevoegen" class="add-button">Toevoegen</button>
                <a href="/pages/admin-pannel.php" class="back-button">Terug</a>
            </div>

        </form>
    </main>


</body>

</html>