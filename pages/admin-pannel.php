<?php
include('../dbcalls/login/read.php');
include('../dbcalls/reizen/read.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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

    <div class="text-admin">
        <h1>Admin-Pannel</h1>
    </div>

    <div class="admin-button">
        <a href="toevoegen.php">Reis toevoegen</a>
    </div>

    <div class="admin-button">
        <a href="recenties.php">Recenties bekijken</a>
    </div>

    <div class="card-container">

    <?php foreach ($reizen as $reis) { ?>
        <div class="reis-card">
            <p><?php echo $reis["reisnaam"]; ?></p>
            <p>€ <?php echo $reis["reisprijs"]; ?></p>

            <form action="reizen-edit.php" method="get">
                <input type="hidden" name="reisid" value="<?php echo $reis["reisid"]; ?>">
                <input type="submit" value="Bewerken">
            </form>

            <form action="../dbcalls/reizen/delete.php" method="post">
                <input type="hidden" name="reisid" value="<?php echo $reis["reisid"]; ?>">
                <input type="submit" value="Verwijderen">
            </form>
        </div>
    <?php } ?>

</div>


</body>

</html>