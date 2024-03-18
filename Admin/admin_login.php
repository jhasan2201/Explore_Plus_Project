<?php


$username = $password = "";

$error = array('username' =>'',  'password' => '');


if(isset($_POST['login'])){
    if(isset($_POST['username']) && isset($_POST['password'])){
        if(empty($_POST['username'])){
            $error['username'] = "Username is required";
        }
        else{
            $username = $_POST['username'];
        }

        if(empty($_POST['password'])){
            $error['password'] = "Password is required";
        }
        else{
            $password = $_POST['password'];
        }


        if(array_filter($error)){
            echo "Login Unsuccessful";
        }
        else{
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username=="Admin" and $password=='keypass'){
                header('Location: http://localhost/explore_plus/Admin/admin.php');
            }
            else{
                echo "Login unsuccessful" ;
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<section class="admin__login">
    <div class="login__contaner">
        <form action="admin_login.php" method="post">
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
        </form>
    </div>
</section>
</body>
</html>
