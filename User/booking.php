<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
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
    <div class="booking__container">
        <div class="booking_seat">
            <form action="" class="booking__form">

                <fieldset class="booking__fieldset">
                    <h3>Book For:</h3>
                    <div class="booking__child">
                        <label for="child" class="booking__label">Child:</label>
                        <input type="number" name="child" id="child" value="0" min="0" max="40" step="1" >
                    </div>
                    <div class="booking__adult">
                        <label for="adult" class="booking__label">Adult:</label>
                        <input type="number" name="adult" id="adult" value="0" min="0" max="40" step="1" >
                    </div>
                    <div class="booking__senior">
                        <label for="senior" class="booking__label">Senior:</label>
                        <input type="number" name="senior" id="senior" value="0" min="0" max="40" step="1" >
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="booking__info">
            <form class="booking__form" action="">
                <h3 class="booking__h3">Insert senior one's information:</h3>
                <fieldset class="booking__fieldset fieldset-two">
                    <div class="booking__element">
                        <label class="booking__label"  for="name">Name:</label>
                        <input class="booking__input"  type="text" name="name" id="name"  required autofocus>
                    </div>
                    <div class="booking__element">
                        <label class="booking__label" for="email">Email</label>
                        <input class="booking__input" type="email" name="email" id="email"  required autofocus>
                    </div>
                    <div class="booking__element">
                        <label class="booking__label"  for="dob">Date Of Birth</label>
                        <input class="booking__input"  type="date" name="dob" id="dob"  required autofocus>
                    </div>
                    <div class="booking__element">
                        <label class="booking__label" for="phone">Phone</label>
                        <input class="booking__input" type="url" name="phone" id="phone"  required autofocus>
                    </div>

                </fieldset>

            </form>
        </div>
        <div class="booking__payment booking">
            <nav class="main__tour booking__tour">
                <span>Pay For Booking:</span>
                <a href="user_payment.php"><span class="main__sp book">Payment</span></a>
            </nav>
        </div>
    </div>

</main>


<footer class="footer">
    <div class="footer__contact">
        <h3 class="footer__h3">Contact us:</h3>
        <ul class="footer__ul">
            <li><a href="../footerPage/contact_us.html">Contact</a></li>
            <li><a href="../footerPage/customer.html">Customer</a></li>
            <li><a href="../footerPage/website_feedback.html">Website Feedback</a></li>
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
            <li><a href="../footerPage/about__us.html">About Explore.com</a></li>
            <li><a href="../footerPage/terms_condition.html">Terms &amp; Conditions</a></li>
            <li><a href="../footerPage/privacy_statement.html">Privacy Statement</a></li>
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

</body>
</html>
