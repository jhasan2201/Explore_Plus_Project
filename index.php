<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="login">
    <div class="login__contaner">
        <form action="index.php" method="post">
            <h1 class="login__h1">Login / Sign-up</h1>
            <div class="login__item">
                <label for="username">Username:</label>
                <input class="login__input" type="text" name="username" id="username" placeholder="Enter your name">
            </div>
            <div class="login__item">
                <label for="password">Password :</label>
                <input class="login__input" type="password" name="password" id="password" placeholder="Enter your password">
            </div>
            <button class="login__button" type="submit" name="login">Login</button>
            <p class="login__p">Do not Have an Account? Register</p>
            <button class="login__button" type="submit" name="login"><a href="User/signup.php">Register</a></button>
        </form>
    </div>
</section>
</body>
</html>
