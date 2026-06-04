<?php
session_start();
include("../conn.php");


$useremail = $_POST["useremail"];
$userpassword = $_POST["userpassword"];

$sql = "SELECT * FROM users WHERE useremail = :useremail";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':useremail', $useremail);
$stmt->execute();
$user = $stmt->fetch();

if ($user){
   if ($user['userrole'] == 'admin' && $user['userpassword'] == $userpassword) {
    header('location: ../../pages/admin-pannel.php');
} else if ($user['userrole'] == 'klant' && $user['userpassword'] == $userpassword) {
    header('location: ../../index.php');
} else {
    echo 'Wrong user details';
}
}  else {
    echo'Wrong user details';
}