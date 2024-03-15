<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Edit</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header class="header admin">
  <div class="header__logo">
    <figure>
      <img src="../../img/logo3.png" alt="logo" title="logo" height="115" width="600">
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
      <li><a href="../transaction.php">Transaction</a></li>
      <li><a href="../tour_condition.php">Tour</a></li>
      <li><a href="../finance.php">Finance</a></li>
      <li><a href="../guide_info.php">Guide</a></li>
    </ul>
    <ul class="header__ul header__admin">
      <li><a href="../trip_crud/trip_adding.php">Trip Adding</a></li>
      <li><a href="../transportation_info.php">Transport</a></li>
      <li><a href="../hotel_info.php">Hotel</a></li>
      <li><a href="../restaurant_info.php">Restaurant</a></li>
    </ul>
  </nav>
</header>

<main class="main__crud">
  <h1 class="center"></h1>
  <form class="crud__all" action="">
    <h3 class="crud__h3">Restaurant Edit Item:</h3>
    <fieldset class="crud__fieldset">
      <p class="crud__p">
        <label class="crud__label" for="breakfast">Breakfast:</label>
        <input class="crud__input" type="text" name="breakfast" id="breakfast"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="breakfast-cost">Breakfast Cost</label>
        <input class="crud__input" type="text" name="breakfast-cost" id="breakfast-cost"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="lunch">Lunch</label>
        <input class="crud__input" type="text" name="lunch" id="lunch"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="lunch-cost">Lunch Cost</label>
        <input class="crud__input" type="text" name="lunch-cost" id="lunch-cost"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="dinner">Dinner</label>
        <input class="crud__input" type="text" name="dinner" id="dinner" required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="dinner-cost">Dinner Cost</label>
        <input class="crud__input" type="text" name="dinner-cost" id="dinner-cost"  required autofocus>
      </p>
    </fieldset>
    <div class="crud__div">
      <button class="crud__btn" type="submit"><a href="../restaurant_info.php">Submit</a></button>
      <button class="crud__btn diff2" type="reset">Reset</button>
    </div>
  </form>

</main>



<?php
include "../header_footer/footer.php"
?>