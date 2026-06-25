<?php

include("../conn.php");

$reisnaam = $_POST["reisnaam"];
$reisfoto = $_POST["reisfoto"];
$reissterren = $_POST["reissterren"];
$reisland = $_POST["reisland"];
$reisprijs = $_POST["reisprijs"];
$reisvertrekdatum = $_POST["reisvertrekdatum"];
$reisduur = $_POST["reisduur"];
$reisluchthaven = $_POST["reisluchthaven"];
$reistype_vlucht = $_POST["reistype_vlucht"];
$reistype_verblijf = $_POST["reistype_verblijf"];
$features = $_POST["features"];
$reispersonen = $_POST["reispersonen"];

$sql = "INSERT INTO reizen (reisnaam, reisfoto, reissterren, reisland, reisprijs, reisvertrekdatum, reisduur, reisluchthaven, reistype_vlucht, reistype_verblijf, features, reispersonen) VALUES (:reisnaam, :reisfoto, :reissterren, :reisland, :reisprijs, :reisvertrekdatum, :reisduur, :reisluchthaven, :reistype_vlucht, :reistype_verblijf, :features, :reispersonen)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":reisnaam", $reisnaam);
$stmt->bindParam(":reisfoto", $reisfoto);
$stmt->bindParam(":reissterren", $reissterren);
$stmt->bindParam(":reisland", $reisland);
$stmt->bindParam(":reisprijs", $reisprijs);
$stmt->bindParam(":reisvertrekdatum", $reisvertrekdatum);
$stmt->bindParam(":reisduur", $reisduur);
$stmt->bindParam(":reisluchthaven", $reisluchthaven);
$stmt->bindParam(":reistype_vlucht", $reistype_vlucht);
$stmt->bindParam(":reistype_verblijf", $reistype_verblijf);
$stmt->bindParam(":features", $features);
$stmt->bindParam(":reispersonen", $reispersonen);

$stmt->execute();

header('location: ../../pages/admin-pannel.php');