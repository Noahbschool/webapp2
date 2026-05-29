<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reis toevoegen</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="header-admin">

    <div class="logo">
        <img src="../assets/img/placeholder-300x300.png">
        <div class="logo-text">N-reizen</div>
    </div>

    <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="">Bestemmingen</a>
        <a href="over-ons.php">Over ons</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="button-toevoegen">
        <a href="toevoegen.php">toevoegen</a>
    </div>

</header>


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



<form action="#">

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

    
    <div>(ja/nee)</div>
    
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

    <button type="submit" class="admin-button">Toevoegen</button>


</form>



</body>
</html>