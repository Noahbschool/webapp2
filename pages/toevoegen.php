<?php
session_start();
?>
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

            <label>Afbeelding 1</label>
            <input type="text" name="afbeelding"><br>

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