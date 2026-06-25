<?php

include("../conn.php");

$reisid = $_POST["reisid"];

$sql = "DELETE FROM reizen WHERE reisid = :reisid";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":reisid", $reisid);

$stmt->execute();

header("location: ../../pages/admin-pannel.php");