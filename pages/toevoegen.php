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

        <form method="post" action="../dbcalls/reizen/create.php" class="add-form">

            <label>Reisnaam</label>
            <input type="text" name="reisnaam" required><br>

            <label>Reisfoto</label>
            <input type="text" name="reisfoto" required><br>

            <label>Sterren</label>
            <input type="number" name="reissterren" min="1" max="5" required><br>

            <label>Reisland</label>
            <input type="text" name="reisland" required><br>

            <label>Prijs</label>
            <input type="number" name="reisprijs" required><br>

            <label>Vertrekdatum</label>
            <input type="date" name="reisvertrekdatum" required><br>

            <label>Reisduur</label>
            <input type="number" name="reisduur" required><br>

            <label>Luchthaven</label>
            <input type="text" name="reisluchthaven" required><br>

            <label>Type vlucht</label>
            <input type="text" name="reistype_vlucht" required><br>

            <label>Type verblijf</label>
            <input type="text" name="reistype_verblijf" required><br>

            <label>Features</label>
            <input type="text" name="features" required><br>

            <label>Aantal personen</label>
            <input type="number" name="reispersonen" min="1" max="8" required><br>

            <div class="form-actions">
                <button type="submit" name="toevoegen" class="add-button">Toevoegen</button>
                <a href="/pages/admin-pannel.php" class="back-button">Terug</a>
            </div>

        </form>
    </main>


</body>

</html>