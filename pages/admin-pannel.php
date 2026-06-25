<?php
include('../dbcalls/login/read.php');
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

        <div class="reis-card">

            <img src="/assets/img/placeholder-300x300.png" class="card-img" alt="hotel">

            <div class="card-info">

                <div class="card-title">Boutique Hotel Herman K ⭐⭐⭐⭐⭐</div>

                <div class="card-text">1 nacht • 2 volwassenen</div>

                <div class="card-price">€ 391</div>

                <div class="card-small">inclusief belastingen en toeslagen</div>

                <div class="card-buttons">
                    <a href="view.php" class="button-view">Bekijken</a>
                    <a href="edit.php" class="button-edit">Bewerken</a>
                    <a href="delete.php" class="button-delete">Verwijderen</a>
                </div>

            </div>

        </div>


        <div class="reis-card">

            <img src="/assets/img/placeholder-300x300.png" class="card-img" alt="hotel">

            <div class="card-info">

                <div class="card-title">Boutique Hotel Herman K ⭐⭐⭐⭐⭐</div>

                <div class="card-text">1 nacht • 2 volwassenen</div>

                <div class="card-price">€ 250</div>

                <div class="card-small">inclusief belastingen en toeslagen</div>

                <div class="card-buttons">
                    <a href="view.php" class="button-view">Bekijken</a>
                    <a href="edit.php" class="button-edit">Bewerken</a>
                    <a href="delete.php" class="button-delete">Verwijderen</a>
                </div>

            </div>

        </div>

        <div class="reis-card">

            <img src="/assets/img/placeholder-300x300.png" class="card-img" alt="hotel">

            <div class="card-info">

                <div class="card-title">Boutique Hotel Herman K ⭐⭐⭐⭐⭐</div>

                <div class="card-text">1 nacht • 2 volwassenen</div>

                <div class="card-price">€ 150</div>

                <div class="card-small">inclusief belastingen en toeslagen</div>

                <div class="card-buttons">
                    <a href="view.php" class="button-view">Bekijken</a>
                    <a href="edit.php" class="button-edit">Bewerken</a>
                    <a href="delete.php" class="button-delete">Verwijderen</a>
                </div>

            </div>

        </div>

    </div>


</body>

</html>