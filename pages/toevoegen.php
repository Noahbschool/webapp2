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