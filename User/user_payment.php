<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Payment</title>
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
    <div class="payment__container">
        <div class="payment__method">
            <h2 class="payment__h2">Payment method</h2>
            <form action="" class="payment__form">
                <fieldset class="payment__fieldset">
                    <p class="payment__p">
                        <input type="radio" name="payment" id="dept-crdt">
                        <i class="fa-solid fa-credit-card"></i>
                        <label for="dept-crdt">Credit/Debit Card</label>
                    </p>
                    <p class="payment__p">
                        <input type="radio" name="payment" id="paypal">
                        <i class="fa-brands fa-cc-paypal"></i>
                        <label for="paypal">Paypal</label>
                    </p>
                    <p class="payment__p">
                        <input type="radio" name="payment" id="g-pay">
                        <i class="fa-brands fa-google-pay"></i>
                        <label for="g-pay">Google Pay</label>
                    </p>
                    <p class="payment__p">
                        <input type="radio" name="payment" id="apple-pay">
                        <i class="fa-brands fa-cc-apple-pay"></i>
                        <label for="apple-pay">Apple Pay</label>
                    </p>
                    <p class="payment__p">
                        <input type="radio" name="payment" id="amazon-pay">
                        <i class="fa-brands fa-cc-amazon-pay"></i>
                        <label for="amazon-pay">Amazon Pay</label>
                    </p>
                </fieldset>
            </form>
        </div>
        <div class="payment__summary">
            <h2 class="payment__h2">Summary</h2>
            <div class="amount">
                <span>Original Price:</span>
                <span>$ 350</span>
            </div>
            <div class="total">
                <span>Total:</span>
                <span>$ 350</span>
            </div>
            <div class="checkout">
                <a href="main.php">
                    <span>Complete Checkout</span>
                </a>
            </div>
        </div>

    </div>


</main>


<?php
include 'header_footer/footer.php'
?>
