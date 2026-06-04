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
    <header class="header">
        <a href="./index.php"><img class="logo" src="../assets/img/n-reizen-logo.png" alt="logo"></a>
        <nav class="header-buttons">
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login-register.php">Log in</a></li>
            </ul>
        </nav>
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