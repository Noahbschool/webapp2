<?php
include("../dbcalls/conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and register page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header class="middle-blue header font-inter-white">
        <img class="logo" src="../assets/img/placeholder-300x300.png" alt="logo">
        <div class="header-buttons">
            <h2>Contact</h2>
            <h2>Log in</h2>
        </div>
    </header>
    <main>
        <section id="login-register" class="landingspagina">
            <div class="login-signup-box">
                <form class="login-signup-form" action="../dbcalls/login/login.php" method="POST">
                    <input type="email" name="useremail" class="signin-input" placeholder="Mail"> <br>
                    <input type="password" name="userpassword" class="signin-input" placeholder="Password"> <br>
                    <input type="submit" class="sign-in" value="Sign in">
                </form>
            </div>
            <div class="login-signup-box">
                <form class="login-signup-form" action="../dbcalls/login/register.php" method="POST">
                    <input type="email" name="useremail" class="signin-input" placeholder="Mail"> <br>
                    <input type="password" name="userpassword" class="signin-input" placeholder="Password"> <br>
                    <input type="password" name="password_confirm" class="signin-input" placeholder="Retype password">
                    <input type="submit" class="sign-in" value="Sign in">
                </form>
            </div>
        </section>
    </main>


</body>

</html>