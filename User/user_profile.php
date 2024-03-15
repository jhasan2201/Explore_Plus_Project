<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<header class="header">
    <div class="header__logo">
        <figure>
            <img src="../img/logo2.png" alt="logo" title="logo" height="115" width="603">
        </figure>
    </div>
    <div class="header_search">
        <form class="search__bar" action="">
            <input class="search__input" type="text" placeholder="Search anything" name="search">
            <button class="search__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <nav class="header__nav">
        <ul class="header__ul">
            <li><a href="main.php">Home</a></li>
            <li><a href="tour.php">Tour</a></li>
            <li><a href="../footerPage/contact_us.html">Contact</a></li>
            <li><a href="user_profile.php">User</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <div class="profile__container">
        <div class="profile__back">
            <figure>
                <img src="../img/background-5.jpg" alt="background" height="1327" width="4711">
            </figure>
        </div>
        <div class="profile__pic">
            <figure>
                <img src="../img/userdp/IMG-20231216-WA0025.jpg" alt="dp" width="750" height="750">
            </figure>
        </div>

        <div class="profile__about">
            <div class="profile__info">
                <div class="profile__label"><h3>Username</h3></div>
                <div class="profile__data">j9248</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Name</h3></div>
                <div class="profile__data">Jehan</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Email</h3></div>
                <div class="profile__data">jehan@mail.com</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Date of Birth</h3></div>
                <div class="profile__data">21 jan 2001</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>City</h3></div>
                <div class="profile__data">Dhaka</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Country</h3></div>
                <div class="profile__data">BD</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Gender</h3></div>
                <div class="profile__data">Male</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Language</h3></div>
                <div class="profile__data">bangla</div>
            </div>
            <div class="profile__info">
                <div class="profile__label"><h3>Phone</h3></div>
                <div class="profile__data">01646456244</div>
            </div>
        </div>

    </div>



</main>



<?php
include 'header_footer/footer.php'
?>
