<?php
include("../conn.php");


    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $password_confirm = $_POST["password_confirm"];

    if ($userpassword == $password_confirm) {
        $sqlCHECK = "SELECT * FROM users WHERE useremail = :useremail";
        $stmtCHECK = $conn->prepare($sqlCHECK);
        $stmtCHECK->bindParam(":useremail", $useremail);
        $stmtCHECK->execute();
        $existingUser = $stmtCHECK->fetch();
        if ($existingUser) {
            echo "Mail already in use";
        } else {

            $sql = "INSERT INTO users (useremail, userpassword, userrole) VALUES (:useremail, :userpassword, 'klant')";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':useremail', $useremail);
            $stmt->bindParam(':userpassword', $userpassword);
            $stmt->execute();
        }
    } else {
        echo 'Failed password check';
    }
    header('location: ../../pages/login-register.php');
