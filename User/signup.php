<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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

<main class="main__form background__change">

    <form class="form__all" action="">
        <h3 class="form__h3">About Yourself:</h3>
        <fieldset class="form__fieldset">
            <p class="form__p">
                <label class="form__label" for="name">Name:</label>
                <input class="form__input" type="text" name="name" id="name"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="email">Email</label>
                <input class="form__input" type="email" name="email" id="email"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="dob">Date Of Birth</label>
                <input class="form__input" type="date" name="dob" id="dob"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="phone">Phone</label>
                <input class="form__input" type="number" name="phone" id="phone"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="city">City</label>
                <input class="form__input" type="text" name="city" id="city" required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="country">Country</label>
                <input class="form__input" type="text" name="country" id="country"  required autofocus>
            </p>

            <p class="form__p radio__p">
                <label class="form__label">Gender</label>
            <div class="radio__div">
                <input class="radio__input" type="radio" name="gender" id="male">
                <label class="radio__label" for="male">Male</label>
            </div>
            <div class="radio__div">
                <input class="radio__input" type="radio" name="gender" id="female">
                <label class="radio__label" for="female">Female</label>
            </div>
            </p>
            <p class="form__p">
                <label class="form__label" for="language">Language</label>
                <input class="form__input" type="text" name="language" id="language"  required autofocus>
            </p>
            <p class="form__p form_area">
                <label class="form__label" for="past-trip">Past Trip</label>
                <textarea class="form__textarea" name="past-trip" id="past-trip" cols="10" rows="6"></textarea>
            </p>
            <p class="form__p">
                <label class="form__label" for="profile-pic">Profile Pic&nbsp;&nbsp;&nbsp;</label>
                <input class="file_up" type="file" name="profile-pic" id="profile-pic">
            </p>
            <p class="form__p">
                <button class="login__button form_spc" type="submit" name="login"><a href="main.php">Register</a></button>
            </p>


        </fieldset>

    </form>

</main>



<?php
include 'header_footer/footer.php'
?>

