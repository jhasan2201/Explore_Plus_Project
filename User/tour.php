
<?php

$conn = mysqli_connect("localhost","root","","explore_plus");

if(!$conn){
    echo "Connection Error" . mysqli_connect_error() . '<br>';
}

$sql = "SELECT * FROM tour";

$result = mysqli_query($conn,$sql);

$tours = mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour</title>
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

    <div class="card__container">
        <div class="card__list">
            <?php foreach ($tours as $tour): ?>
            <div class="card__item">
                <a href="tour_info.php?tour_id=<?php echo $tour['tour_id'] ?>">
                    <div class="card__pic">
                        <figure>
                            <img src="../img/card1/c451144f-b581-4a78-a150-c89da33f8626.webp" alt="card1" width="1200" height="900">
                        </figure>
                    </div>
                    <div class="card__desc">
                        <div class="card__location">
                            <h3><?php echo htmlspecialchars($tour['place_name']) . " , " . htmlspecialchars($tour['country'])?></h3>
                        </div>
                        <div class="card__write">
                            <p><?php echo htmlspecialchars($tour['about'])?></p>
                        </div>
                        <div class="card__start-end">
                            <p><?php echo htmlspecialchars($tour['start_date']) . " To " . htmlspecialchars($tour['finish_date'])?></p>
                        </div>
                        <div class="card__budget">
                            <h3>$ <?php echo htmlspecialchars($tour['budget'])?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach;
            mysqli_close($conn);
            ?>

<!--            <div class="card__item">-->
<!--                <a href="tour_info.php">-->
<!--                    <div class="card__pic">-->
<!--                        <figure>-->
<!--                            <img src="../img/card2/card2.webp" alt="card1" width="1440" height="1080">-->
<!--                        </figure>-->
<!--                    </div>-->
<!--                    <div class="card__desc">-->
<!--                        <div class="card__location">-->
<!--                            <h3>Tarui,India</h3>-->
<!--                        </div>-->
<!--                        <div class="card__write">-->
<!--                            <p>Lorem ipsum dolor sit.</p>-->
<!--                        </div>-->
<!--                        <div class="card__start-end">-->
<!--                            <p>Feb 10-15</p>-->
<!--                        </div>-->
<!--                        <div class="card__budget">-->
<!--                            <h3>$ 350</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->

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
