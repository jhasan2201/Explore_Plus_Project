<?php
$conn = mysqli_connect("localhost","root","","explore_plus");

if(!$conn){
    echo "Connection Error" . mysqli_connect_error() . '<br>';
}

$breakfast = $breakfast_cost = $lunch = $lunch_cost = $dinner = $dinner_cost = "";

$error = array('breakfast' =>'', 'breakfast_cost' =>'', 'lunch' =>'', 'lunch_cost'=>'', 'dinner' =>'', 'dinner_cost'=> '');

if(isset($_GET['submit'])){

    if(empty($_GET['breakfast'])){
        $error['breakfast'] = "Breakfast is required";
    }
    else{
        $breakfast = $_GET['breakfast'];
    }

    if(empty($_GET['breakfast_cost'])){
        $error['breakfast_cost'] = "Breakfast Cost is required";
    }
    else{
        $breakfast_cost = $_GET['breakfast_cost'];
    }

    if(empty($_GET['lunch'])){
        $error['lunch'] = "Lunch is required";
    }
    else{
        $lunch = $_GET['lunch'];
    }

    if(empty($_GET['lunch_cost'])){
        $error['lunch_cost'] = "Lunch cost is required";
    }
    else{
        $lunch_cost = $_GET['lunch_cost'];
    }

    if(empty($_GET['dinner'])){
        $error['dinner'] = "Dinner is required";
    }
    else{
        $dinner = $_GET['dinner'];
    }

    if(empty($_GET['dinner_cost'])){
        $error['dinner_cost'] = "Dinner cost is required";
    }
    else{
        $dinner_cost = $_GET['dinner_cost'];
    }


    if(array_filter($error)){

    }
    else{
        $breakfast = mysqli_real_escape_string($conn,$_GET['breakfast']);
        $breakfast_cost = mysqli_real_escape_string($conn,$_GET['breakfast_cost']);
        $lunch = mysqli_real_escape_string($conn,$_GET['lunch']);
        $lunch_cost = mysqli_real_escape_string($conn,$_GET['lunch_cost']);
        $dinner = mysqli_real_escape_string($conn,$_GET['dinner']);
        $dinner_cost = mysqli_real_escape_string($conn,$_GET['dinner_cost']);
    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Add</title>
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
    <h3 class="crud__h3">Restaurant Add Item:</h3>
    <fieldset class="crud__fieldset">
      <p class="crud__p">
        <label class="crud__label" for="breakfast">Breakfast:</label>
        <input class="crud__input" type="text" name="breakfast" id="breakfast"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="breakfast_cost">Breakfast Cost</label>
        <input class="crud__input" type="number" name="breakfast_cost" id="breakfast_cost"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="lunch">Lunch</label>
        <input class="crud__input" type="text" name="lunch" id="lunch"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="lunch_cost">Lunch Cost</label>
        <input class="crud__input" type="number" name="lunch_cost" id="lunch_cost"  required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="dinner">Dinner</label>
        <input class="crud__input" type="text" name="dinner" id="dinner" required autofocus>
      </p>
      <p class="crud__p">
        <label class="crud__label" for="dinner_cost">Dinner Cost</label>
        <input class="crud__input" type="number" name="dinner_cost" id="dinner_cost"  required autofocus>
      </p>
    </fieldset>
    <div class="crud__div">
      <button class="crud__btn" type="submit" name="submit">>Submit</button>
      <button class="crud__btn diff2" type="reset">Reset</button>
    </div>
  </form>

</main>



<footer class="footer admin-foot">
    <div class="footer__contact">
        <h3 class="footer__h3">Contact us:</h3>
        <ul class="footer__ul">
            <li><a href="../../footerPage/contact_us.html">Contact</a></li>
            <li><a href="../../footerPage/customer.html">Customer</a></li>
            <li><a href="../../footerPage/website_feedback.html">Website Feedback</a></li>
        </ul>
        <div class="footer__icons">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-square-youtube"></i>
        </div>
    </div>
    <div class="footer__about">
        <h3 class="footer__h3">About us:</h3>
        <ul class="footer__ul">
            <li><a href="../../footerPage/about__us.html">About Explore.com</a></li>
            <li><a href="../../footerPage/terms_condition.html">Terms &amp; Conditions</a></li>
            <li><a href="../../footerPage/privacy_statement.html">Privacy Statement</a></li>
        </ul>
        <h4 class="footer__h3">Payment Method</h4>
        <div class="footer__icons">
            <i class="fa-brands fa-cc-mastercard"></i>
            <i class="fa-brands fa-cc-paypal"></i>
            <i class="fa-brands fa-cc-amazon-pay"></i>
            <i class="fa-brands fa-apple-pay"></i>
            <i class="fa-brands fa-google-pay"></i>
        </div>
    </div>
</footer>
