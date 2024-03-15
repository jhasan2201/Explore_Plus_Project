<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guide Profile</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<header class="header admin">
    <div class="header__logo">
        <figure>
            <img src="../img/logo3.png" alt="logo" title="logo" height="115" width="600">
        </figure>
    </div>
    <div class="header_search">
        <form class="search__bar" action="">
            <input class="search__input" type="text" placeholder="Search anything" name="search">
            <button class="search__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <nav class="header__nav nav__admin">
        <ul class="header__ul header__admin">
            <li><a href="transaction.php">Transaction</a></li>
            <li><a href="tour_condition.php">Tour</a></li>
            <li><a href="finance.php">Finance</a></li>
            <li><a href="#">Guide</a></li>
        </ul>
        <ul class="header__ul header__admin">
            <li><a href="trip_crud/trip_adding.php">Trip Adding</a></li>
            <li><a href="transportation_info.php">Transport</a></li>
            <li><a href="hotel_info.php">Hotel</a></li>
            <li><a href="restaurant_info.php">Restaurant</a></li>
        </ul>
    </nav>
</header>

<main class="main__form background__change">

    <form class="form__all" action="">
        <h3 class="form__h3">Guide Information:</h3>
        <fieldset class="form__fieldset">
            <p class="form__p">
                <label class="form__label" for="name">Name:</label>
                <input class="form__input" type="text" name="name" id="name"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="nid-no">NID-No:</label>
                <input class="form__input" type="text" name="nid-no" id="nid-no"  required autofocus>
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
            <p class="form__p">
                <label class="form__label" for="nationality">Nationality</label>
                <input class="form__input" type="text" name="nationality" id="nationality"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="age">Age</label>
                <input class="form__input" type="text" name="age" id="age"  required autofocus>
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
                <label class="form__label" for="language">Speaking Language</label>
                <input class="form__input" type="text" name="language" id="language"  required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="visa-expr">Visa Expire Date</label>
                <input class="form__input" type="date" name="visa-expr" id="visa-expr" required autofocus>
            </p>
            <p class="form__p">
                <label class="form__label" for="photo">Photo</label>
                <input class="form__input file_up" type="file" name="photo" id="photo" required autofocus>
            </p>

        </fieldset>

    </form>

</main>


<?php
include "header_footer/footer.php"
?>