<?php
include("../dbcalls/conn.php");


$sql = "SELECT * FROM reizen";

$stmt = $conn->prepare($sql);
$stmt->execute();
$reizen = $stmt->fetchAll();
$count = count($reizen);

if ($count == 1) {
    ?>
    <p id="reisGevonden"> 1 reis gevonden</p> <?php
} else {
    ?>
    <p id="reisGevonden"> <?php echo "$count" ?> reizen gevonden </p> <?php
} 
