<?php
session_start();
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];

    $sql = "SELECT * FROM users WHERE useremail = :useremail";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':useremail', $useremail);
    $stmt->execute();
    $user = $stmt->fetch();
    if ($user) {
        if ($userpassword == $user['userpassword']) {
            
            $_SESSION['userrole'] = $user['userrole'];

           if ($user['userrole'] === 'admin'){
            $adminredirect = '../../pages/admin-pannel.php';
           } else {
            $adminredirect = '../../index.php';
            };

            header('location: '. $adminredirect);
        } else {
            echo 'Wrong User Details';
        }
    } else {
        echo 'Wrong User Details';
    }
}