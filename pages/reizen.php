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
        <div class="reizen-layout">
            <section class="reizen-search-box">
                <form action="" class="">
                    <label for="aantal-personen">Aantal personen</label>
                    <input type="number" name="aantal-personen" id="aantal-personen" placeholder="Aantal personen"
                        min="1" max="8">
                    <label for="datum-trip">Datum van trip</label>
                    <input type="date" id="datum-trip" min="2026-05-28">
                    <label for="reisduur">Reisduur</label>
                    <input type="text" id="reisduur">
                </form>
            </section>

            <section class="reizen-cards">
                <div>
                    <h2>Vakanties</h2>
                    <?php
                    include("../dbcalls/reizen/read.php");
                    foreach ($reizen as $reis) { ?>
                        <div class="reis-card-overzicht">
                            <div class="reis-card-left-side">
                                <img class="reis-card-image" src="<?php echo $reis['reisfoto'] ?>"
                                    alt="<?php $reis['reisnaam'] ?>">
                            </div>
                            <div class="reis-card-middle-part">
                                <div class="reis-card-middle-part-name-and-star">
                                    <p class="reis-card-name"> <?php echo $reis['reisnaam'] ?></p>
                                    <p class="reis-card-sterren"><?php
                                    if ($reis['reissterren'] == 1) {
                                        echo '⭐';
                                    } else if ($reis['reissterren'] == 2) {
                                        echo '⭐⭐';
                                    } else if ($reis['reissterren'] == 3) {
                                        echo '⭐⭐⭐';
                                    } else if ($reis['reissterren'] == 4) {
                                        echo '⭐⭐⭐⭐';
                                    } else if ($reis['reissterren'] == 5) {
                                        echo '⭐⭐⭐⭐⭐';
                                    } else {
                                        echo 'invalid rating';
                                    }
                                    ?></p>
                                </div>

                                <p class="reis-card-land"><?php echo $reis['reisland'] ?></p>
                                <p><?php echo $reis['features'] ?></p>
                            </div>
                            <div class="reis-card-right-side">
                                <div>
                                    <p>Vanaf </p> 
                                    <div class="reis-card-price">
                                        <?php echo "€".$reis['reisprijs'] ?>
                                    </div>
                                    <p>P.P</p>
                                </div>
                                
                                <p> <?php echo $reis['reisvertrekdatum'] ?></p>
                                <p><?php echo $reis['reisluchthaven'] ?></p>
                                <p><?php echo $reis['reispersonen'] ?></p>
                                <p><?php echo $reis['reisduur'] ?></p>
                                 <button class="reis-card-card-button vind-jouw-vakantie">In winkelwagen</button>
                            </div>
                               
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
        </div>
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