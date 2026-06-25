<?php
include('../dbcalls/login/read.php');
include('../dbcalls/reizen/read.php');
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bewerken</title>
</head>
<body>

<?php foreach ($reizen as $reis) { ?>

    <h1>Reis bewerken</h1>

    <form action="../dbcalls/reizen/update.php" method="post">

        <input type="hidden" name="reisid" value="<?php echo $reis["reisid"]; ?>">

        <label>Reisnaam</label><br>
        <input type="text" name="reisnaam" value="<?php echo $reis["reisnaam"]; ?>"><br>

        <label>Reisfoto</label><br>
        <input type="text" name="reisfoto" value="<?php echo $reis["reisfoto"]; ?>"><br>

        <label>Sterren</label><br>
        <input type="number" name="reissterren" min="1" max="5" value="<?php echo $reis["reissterren"]; ?>"><br>

        <label>Reisland</label><br>
        <input type="text" name="reisland" value="<?php echo $reis["reisland"]; ?>"><br>

        <label>Prijs</label><br>
        <input type="number" name="reisprijs" step="0.01" value="<?php echo $reis["reisprijs"]; ?>"><br>

        <label>Vertrekdatum</label><br>
        <input type="date" name="reisvertrekdatum" value="<?php echo $reis["reisvertrekdatum"]; ?>"><br>

        <label>Reisduur</label><br>
        <input type="number" name="reisduur" value="<?php echo $reis["reisduur"]; ?>"><br>

        <label>Luchthaven</label><br>
        <input type="text" name="reisluchthaven" value="<?php echo $reis["reisluchthaven"]; ?>"><br>

        <label>Type vlucht</label><br>
        <input type="text" name="reistype_vlucht" value="<?php echo $reis["reistype_vlucht"]; ?>"><br>

        <label>Type verblijf</label><br>
        <input type="text" name="reistype_verblijf" value="<?php echo $reis["reistype_verblijf"]; ?>"><br>

        <label>Features</label><br>
        <input type="text" name="features" value="<?php echo $reis["features"]; ?>"><br>

        <label>Aantal personen</label><br>
        <input type="number" name="reispersonen" value="<?php echo $reis["reispersonen"]; ?>"><br>

        <br>
        <input type="submit" value="Opslaan">
        <a href="../pages/admin-pannel.php">Terug</a>

    </form>

    <form action="../dbcalls/reizen/delete.php" method="post">
        <input type="hidden" name="reisid" value="<?php echo $reis["reisid"]; ?>">
        <button type="submit">Verwijderen</button>
    </form>

<?php } ?>

</body>
</html>